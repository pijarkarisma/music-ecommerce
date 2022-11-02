<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class ProductCategory extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.payment');
    }
}
