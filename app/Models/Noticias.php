<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;

    protected $guarded = ['id','create_at','update_at'];

    public function user(){

        return $this->belongsTo(User::class);
    }


    public function image(){

        return $this->morphOne(Image::class, 'imageable');
    }

    public function comentarios(){
        return $this->hasMany(Comentarios::class);
    }

   


}
