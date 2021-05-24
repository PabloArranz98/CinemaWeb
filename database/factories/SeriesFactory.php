<?php

namespace Database\Factories;

use App\Models\Series;
use App\Models\Genero;
use App\Models\User;
use App\Models\Valoraciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Series::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [  'titulo'=> $this->faker->word(40),
        'AñoDeEmision' => $this->faker->randomNumber(4),
        'AñoDeFinalizacíon' => $this->faker->randomNumber(4),
        'temporadas' => $this->faker->randomNumber(4),
        'director' => $this->faker->text(40),
        'reparto' => $this->faker->text(250),
        'sinopsis' => $this->faker->text(250),
        'user_id'=>User::all()->random()->id,
        'genero_id'=>Genero::all()->random()->id,
       


            //
    ];
          
            
    }

}

