<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WithdrawalSlipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name'         => $this->faker->name(),
            'document_series_no'    => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'customer_date'         => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'qr_no'                 => $this->faker->numberBetween($min = 1000, $max = 9000),
            'pallet_no'             => $this->faker->numberBetween($min = 1000, $max = 9000),
            'warehouse'             => $this->faker->city(),
            'wh_location'           => $this->faker->address(),
            'prepared_by'           => $this->faker->name(),
            'approved_by'           => $this->faker->name(),
            'release_by'            => $this->faker->name(),
            'status'                => $this->faker->boolean(),
            'sales_admin'           => $this->faker->name(),
            'wh_incharge'           => $this->faker->name(),
        ];
    }
}
