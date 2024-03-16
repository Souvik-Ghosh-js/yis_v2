<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    protected $fillable = [
       'name', 'product_id', 'description', 'user_id','remark', 'warehouse_id', 'image', 'status', 'payment_status' , 'dimension' , 'address'
    ];

}
