<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mechanics extends Model
{
    use HasFactory;
    public function cars(){
        return $this->hasOne(cars::class);
    }
    public function owners(){
        return $this->hasOneThrough(owners::class,cars::class);
    }
}
