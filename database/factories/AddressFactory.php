<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country'   => $this->faker->country,
            'city'      => $this->faker->city,
            'post_code' => $this->faker->postcode,
            'street'    => $this->faker->streetName,
            'house'     => $this->faker->numberBetween(1, 999),
            'flat'       => $this->faker->numberBetween(1, 999),
        ];
    }
}
