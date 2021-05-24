<?php

namespace Database\Seeders;

use App\Models\Genero;

use App\Models\Valoraciones;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('peliculas');
        Storage::makeDirectory('peliculas');

        Storage::deleteDirectory('series');
        Storage::makeDirectory('series');

        Storage::deleteDirectory('noticias');
        Storage::makeDirectory('noticias');


        $this->call(RoleSeeder::class);
        
       $this->call(UserSeeder::class);
       Genero::factory(4)->create();
       Valoraciones::factory(0)->create();
       
       $this->call(PeliculasSeeder::class);
       
       $this->call(SeriesSeeder::class);

       $this->call(NoticiasSeeder::class);
       

    }
}
