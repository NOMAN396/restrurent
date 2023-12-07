<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\item;

class Item_varient extends Model
{
    use HasFactory;
    public function item(){
        return $this->belongsto(Item::class);}
}
