<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ShoppingCart;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductDetail extends Component
{
    public $title = "Product detail.";
    public $product;
    public $quantity;
    public $total;
    public $currentUserCart;

    public function mount($id)
    {
        $this->product = Product::with(['inventory', 'category'])->where('id', $id)->get()->first();

        if ($this->product->inventory->quantity > 0) {
            $this->quantity = 1;
        } else {
            $this->quantity = 0;
        }

        $this->total = $this->product->price * $this->quantity;
    }

    public function render()
    {
        return view('livewire.product-detail')->extends('layouts.master');
    }

    public function addQuantity()
    {
        if ($this->product->inventory->quantity > 0 and $this->quantity < $this->product->inventory->quantity) {
            $this->quantity++;
            $this->total = $this->product->price * $this->quantity;
        }
    }

    public function subtractQuantity()
    {
        if ($this->quantity > 0) {
            $this->quantity--;
            $this->total = $this->product->price * $this->quantity;
        }
    }

    public function addToCart()
    {
        // if (ShoppingCart::where('product_id', $this->product->id)->exists()) {
        //     $newTotal = $this->total * $this->quantity;
        //     ShoppingCart::where('product_id', $this->product->id)->where('user_id', Auth::id())->update([
        //         'quantity' => $this->quantity,
        //         'total' => DB::raw('total + $newTotal')
        //     ]);
        // } else {
        $lastItem = ShoppingCart::orderBy('id', 'desc')->value('id');
        $lastId = $lastItem + 1;

        ShoppingCart::updateOrCreate([
            'product_id' => $this->product->id,
            'id' => $lastId,
            'user_id' => auth()->user()->id,
            'product_id' => $this->product->id,
            'quantity' => $this->quantity,
            'total' => $this->total,
            'created_at' => Carbon::now()->timestamp,
            'updated_at' => Carbon::now()->timestamp
        ]);
        // }
    }
}
