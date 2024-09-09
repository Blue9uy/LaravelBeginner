<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    use HasFactory;
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function streets(){
        return $this->hasMany(Street::class);
    }

}
