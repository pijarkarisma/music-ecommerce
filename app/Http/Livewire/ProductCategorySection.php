<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCategorySection extends Component
{
    public $category_id;
    public $products;

    public function render()
    {
        $this->products = Product::where('category_id', $this->category_id)->get();
        return view('livewire.product-category-section');
    }
}
