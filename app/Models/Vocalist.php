<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocalist extends Model
{
    public function songs(){
        return $this->belongsToMany(Song::class,"vocalists_songs")->withPivot('release_year');
    }
    use HasFactory;
}
