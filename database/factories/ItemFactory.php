<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_code'             => Str::random(3),
            'item_description'      => $this->faker->catchPhrase(),
            'qty'                   => $this->faker->numberBetween($min = 1000, $max = 9000),
            'uom'                   => $this->faker->numberBetween($min = 1000, $max = 9000),
            'remarks'               => 'Good'
        ];
    }
}
