<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function vocalists(){
        return $this->belongsToMany(Vocalist::class,"vocalists_songs")->withPivot('release_year');
    }
    use HasFactory;
}
