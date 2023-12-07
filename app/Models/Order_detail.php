<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Item;

class Order_detail extends Model
{
    use HasFactory;
     public function Item(){
        return $this->belongsTo(Item::class);
}
     public function Order(){
        return $this->belongsTo(Order::class);
}
}