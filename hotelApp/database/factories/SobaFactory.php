<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SobaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       return[
            'kapacitet'=>$this->faker->numberBetween($min = 1, $max = 10) ,
            'broj_sobe'=>$this->faker->numberBetween($min = 100, $max = 600) ,
             
        ];
    }
}
