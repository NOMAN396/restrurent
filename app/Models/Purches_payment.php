<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purches_payment extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsto(Order::class);
    }
    public function customer(){
        return $this->belongsto(Customer::class);
    }
}
