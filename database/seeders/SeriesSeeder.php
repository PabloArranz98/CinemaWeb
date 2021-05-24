<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Series;


class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $series= Series::factory(10)->create();

        foreach ($series as $series) {
 
         Image:: factory(1)->create([
             'imageable_id' => $series->id,
             'imageable_type' => Series::class
         ]);
            # code...
        }
        //
    }
}
