<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;

    protected $guarded = ['id','create_at','update_at'];

    //Relacion uno a muchos inversa

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function genero(){

        return $this->belongsTo(Genero::class);
    }

    

     //Relacion uno a muchos

     public function valoraciones(){
        return $this->hasMany(Valoraciones::class);
    }

    
    //Relación uno a uno polimórfica

        public function image(){

            return $this->morphOne(Image::class, 'imageable');
        }
   
}
