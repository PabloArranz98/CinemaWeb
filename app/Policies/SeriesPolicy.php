<?php

namespace App\Policies;

use App\Models\Series;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class SeriesPolicy
{
    use HandlesAuthorization;

    public function author(User $user , Series $series){

        if ($user->id == $series->user_id) {
            # code...
            return true;
        }else{
            return false;
        }

   
    }
    }
