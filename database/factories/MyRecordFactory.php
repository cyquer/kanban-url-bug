<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyRecord>
 */
class MyRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status'=>fake()->numberBetween(1,100),
            'title'=>fake()->realText(20),
            'subtitle'=>fake()->realText(75),
            'sort'=>fake()->unique()->randomNumber(),
        ];
    }
}
