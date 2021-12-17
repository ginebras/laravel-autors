<?php

namespace Database\Factories;
use App\Models\autor;

use Illuminate\Database\Eloquent\Factories\Factory;

class autorFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(1),
            'apellido'=>$this->faker->sentence(1),
            'edad'=>$this->faker->numberBetween(1,20),
            'comentario'=>$this->faker->sentence(1)
        ];
    }
}
