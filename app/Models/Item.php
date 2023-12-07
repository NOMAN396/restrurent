<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\item_varient;
use Illuminate\Database\Eloquent\Model\order_details;
use Illuminate\Database\Eloquent\Model\stock;
class Item extends Model
{
    use HasFactory;
    public function catagory(){
        return $this->belongsto(Catagory::class);
    }
    public function kitchen(){
        return $this->belongsto(Kitchen::class);
    }
    public function item_varient(){
        return $this->hasMany(item_varient::class);
    }
    public function order_details(){
        return $this->hasMany(order_details::class);
    }
    public function stock(){
        return $this->hasMany(stock::class);
    }
}
