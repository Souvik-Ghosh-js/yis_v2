<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddedProduct extends Model
{
    use HasFactory;
    protected $table = 'added_products';

    protected $fillable = ['name', 'price', 'category', 'qty', 'image'];
    public function carts()
{
    return $this->hasMany(Cart::class);
}
}
