<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function townships(){
        return $this->hasMany(Township::class);
    }
    public function streets(){
        return $this->hasManyThrough(Street::class,Township::class);
    }
}
