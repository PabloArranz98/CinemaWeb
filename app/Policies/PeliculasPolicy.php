<?php

namespace App\Policies;

use App\Models\Peliculas;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeliculasPolicy
{
    use HandlesAuthorization;

    public function author(User $user , Peliculas $pelicula){

        if ($user->id == $pelicula->user_id) {
            # code...
            return true;
        }else{
            return false;
        }

    }
}
