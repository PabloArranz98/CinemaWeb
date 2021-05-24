<?php

namespace Database\Factories;

use App\Models\Noticias;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'titulo'=> $this->faker->word(100),
            'extract' =>$this->faker->text(100),
            'noticia' =>$this->faker->text(200),
            'user_id'=>User::all()->random()->id
           

            //
        ];
    }
}
