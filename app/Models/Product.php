<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShoppingCart;
use App\Models\Inventory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    public $table = "product";

    public function shopping_cart()
    {
        return $this->hasMany(ShoppingCart::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
