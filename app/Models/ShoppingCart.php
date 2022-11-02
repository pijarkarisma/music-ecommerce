<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ShoppingCart extends Model
{
    use HasFactory;

    public $table = "shopping_cart";

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'quantity',
        'total',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
