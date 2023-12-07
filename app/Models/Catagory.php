<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Item;


use Illuminate\Database\Eloquent;
class Catagory extends Model
{
    use HasFactory;
    public function item(){
        return $this->hasMany(Item::class);
    }
}
