<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;
    public function item(){
        return $this->hasMany(Item::class);
    }
    public function kitchen_catagories(){
        return $this->belongsTo(Kitchen_catagory::class,'kichen_catagories_id','id');
    }
}
