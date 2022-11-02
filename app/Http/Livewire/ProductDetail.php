<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $title = "Product detail.";
    public $product;
    public $quantity;

    public function mount($id)
    {
        $this->product = Product::with(['inventory', 'category'])->where('id', $id)->get()->first();

        if ($this->product->inventory->quantity > 0) {
            $this->quantity = 1;
        } else {
            $this->quantity = 0;
        }
    }

    public function render()
    {
        return view('livewire.product-detail')->extends('layouts.master');
    }

    public function addQuantity()
    {
        if ($this->product->inventory->quantity > 0) {
            $this->quantity++;
        }
    }

    public function subtractQuantity()
    {
        if ($this->quantity > 0) {
            $this->quantity--;
        }
    }
}
