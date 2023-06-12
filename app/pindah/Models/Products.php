<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // protected $table = 'products';
    // protected $primaryKey = 'id';
    // protected $fillable = ['name', 'category_id', 'quantity', 'price', 'description', 'image'];

    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetails', 'product_id', 'id');
    }
}
