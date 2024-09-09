<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    public function nrc(){
       return $this->hasOne(Nrc::class);
    }
}
