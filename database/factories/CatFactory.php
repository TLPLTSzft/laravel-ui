<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = ['Whiskey', 'Cappuccino', 'Mochi', 'Ginger', 'Honey', 'Garfield', 'Mufasa', 'Lucifer', 'Felix', 'Lady', 'Lucky', 'Princess'];
        $color = ['black', 'grey', 'brown', 'white', 'black & white', 'spotted', 'ginger'];

        return [
            'name' => fake()->randomElement($name),
            'age' => fake()->numberBetween(1, 30),
            'tom_cat' => fake()->boolean(),
            'color' => fake()->randomElement($color),
        ];
    }
}
