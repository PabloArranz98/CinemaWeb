<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoraciones extends Model
{
    use HasFactory;

    //Relacion muchos a muchos

    public function peliculas(){
        return $this->belongsTo(Peliculas::class);
    }
}
