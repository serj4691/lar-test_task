<?php

namespace Database\Factories;

use App\Models\Courier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class CourierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Courier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create('Ru_RU');
        return [
            'title' => $this->faker->name,
            'phone' => $this->faker->unique()->phoneNumber,
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
