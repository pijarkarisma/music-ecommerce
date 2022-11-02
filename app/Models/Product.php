<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShoppingCart;

class Product extends Model
{
    use HasFactory;

    public $table = "product";

    public function shopping_cart()
    {
        return $this->hasMany(ShoppingCart::class);
    }
}
