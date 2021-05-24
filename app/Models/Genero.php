<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

       //Relacion 1 a muchos

       public function peliculas(){
        return $this->hasMany(Peliculas::class);
    }

    public function series(){
        return $this->hasMany(Series::class);
    }
}
