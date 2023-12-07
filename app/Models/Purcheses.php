<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purcheses extends Model
{
    use HasFactory;
    public function supplier(){
        return $this->belongsto(Supplier::class);
    }
}
