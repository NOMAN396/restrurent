<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purches_item extends Model
{
    use HasFactory;
    public function purchese(){
        return $this->belongsto(Purcheses::class);
    }
    public function supplier(){
        return $this->belongsto(Supplier::class);
    }
}
