<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Headset>
 */
class HeadsetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = ['Sennheiser', 'Sony', 'JBL', 'Samsung', 'Philips', 'Apple', 'Xiaomi', 'Logitech', 'JLab', 'LG'];
        $connection = ['Jack', 'USB', 'Wireless', 'Jack / USB', 'Jack / Wireless', 'USB / Wireless', 'Jack / USB / Wireless'];

        return [
            'brand' => fake()->randomElement($brand),
            'connection' => fake()->randomElement($connection),
            'priceUSD' => fake()->numberBetween(10, 10000),
            'making' => fake()->dateTimeBetween('-10 years', 'now'),

        ];
    }
}
