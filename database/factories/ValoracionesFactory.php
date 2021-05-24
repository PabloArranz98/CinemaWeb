<?php

namespace Database\Factories;

use App\Models\Valoraciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValoracionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Valoraciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            //
            'name' => $this->faker->text(40),
            'titulo'=> $this->faker->unique()->word(40),
            'comentario' => $this->faker->text(200),
            'nota' => $this->faker->randomNumber(2),
          
        ];
    }
}
