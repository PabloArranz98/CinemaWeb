<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Noticias;
use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $noticias = Noticias::factory(10)->create();
        foreach($noticias as $noticias){
            Image::factory(1)->create([
                'imageable_id' => $noticias->id,
                'imageable_type' =>Noticias::class
            ]);
        }
    }
}


