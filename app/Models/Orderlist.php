<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;
    public function waiter(){
        return $this->belongsto(Waiter::class);
    }
    public function item(){
        return $this->belongsto(Item::class);
    }
}
