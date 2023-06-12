<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsTo('App\Models\Products', 'product_id', 'id');
    }

    public function orders()
    {
        return $this->belongsTo('App\Models\Orders', 'order_id', 'id');
    }
}
