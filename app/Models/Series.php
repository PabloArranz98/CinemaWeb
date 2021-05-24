<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

     //Relacion uno a muchos inversa

     public function user(){

        return $this->belongsTo(User::class);
    }

    public function genero(){

        return $this->belongsTo(Genero::class);
    }

    //Relacion uno a muchos
    
    public function valoracioneS(){

        return $this->hasMany(ValoracionesS::class);
    }

    

    //Relación uno a uno polimórfica

        public function image(){

            return $this->morphOne(Image::class, 'imageable');
        }
   
}

