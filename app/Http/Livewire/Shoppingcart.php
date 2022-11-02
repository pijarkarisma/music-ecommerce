<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ShoppingCart as ModelsShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $title = "What's in your cart?";
    public $items;
    public $userId;
    protected $listeners = ['quantityAdded' => 'render', 'quantitySubtracted' => 'render', 'itemDeleted' => 'render'];

    public function mount()
    {
        $this->userId = Auth::id();
    }

    public function render()
    {
        $this->items = ModelsShoppingCart::with('product')->where('user_id', $this->userId)->get();
        return view('livewire.shopping-cart')->extends('layouts.master');
    }

    public function addQuantity($itemId, $quantity)
    {
        ModelsShoppingCart::where('id', $itemId)->update([
            'quantity' => $quantity + 1
        ]);
        $this->emit('quantityAdded');
    }

    public function subtractQuantity($itemId, $quantity)
    {
        ModelsShoppingCart::where('id', $itemId)->update([
            'quantity' => $quantity - 1
        ]);
        $this->emit('quantitySubtracted');
    }

    public function deleteItem($itemId)
    {
        $item = ModelsShoppingCart::find($itemId);
        $item->delete();
        $this->emit('itemDeleted');
    }
}
