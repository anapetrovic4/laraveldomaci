<?php

namespace Database\Factories;

use App\Models\Gost;
use App\Models\Soba;
use Illuminate\Database\Eloquent\Factories\Factory;

class IznajmljivanjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gost_id'=>random_int(1,Gost::count()),
            'soba_id'=>random_int(1,Soba::count()),
            'datum_od'=>$this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'datum_do'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
