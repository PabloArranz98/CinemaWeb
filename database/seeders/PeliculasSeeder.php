<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Peliculas;
use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $peliculas= Peliculas::factory(10)->create();

       foreach ($peliculas as $peliculas ) {

        Image:: factory(1)->create([
            'imageable_id' => $peliculas->id,
            'imageable_type' => Peliculas::class
        ]);
           # code...
       }
    }
}
