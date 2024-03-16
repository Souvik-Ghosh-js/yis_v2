<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAssistedPurchase extends Model
{
    use HasFactory;
    protected $table = 'user_assisted_purchase';

    protected $fillable = [
        'user_id',
        'product_name',
        'product_description',
        'image',
        'price',
        'url',
    ];
}
