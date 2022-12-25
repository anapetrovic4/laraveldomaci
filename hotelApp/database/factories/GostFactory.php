<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' =>$this->faker->lastName(),
            'br_lk' =>  $this->faker->numerify('###########'),
            
        ];
    }
}
