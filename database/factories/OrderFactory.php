<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create('Ru_RU');
        return [
            'description' => $faker->text($maxNbChars = 200),
            'appointment' => $faker->address,
            'price' => $faker->numberBetween($min = 100, $max = 200),
            'courier_id' => $faker->numberBetween($min = 1, $max = 10),
            'published_at'    => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '-5 days'),
            'finished_at'    => $this->faker->optional()->dateTimeBetween($startDate = '-5 months', $endDate = '-1 days'),
        ];
    }
}
