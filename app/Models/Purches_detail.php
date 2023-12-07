<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purches_detail extends Model
{
    use HasFactory;
    public function purcheses(){
        return $this->belongsto(Purcheses::class);
    }
}
