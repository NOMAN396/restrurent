<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    public function Item(){
        return $this->belongsto(Item::class);
    }
    public function Row_item(){
        return $this->belongsto(Row_item::class);
    }
    public function Purches(){
        return $this->belongsto(Purches::class);
    }
    public function Kitchen(){
        return $this->belongsto(Kitchen::class);
    }
    public function Unit(){
        return $this->belongsto(Unit::class);
    }
}
