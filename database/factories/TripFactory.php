<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'start_time' => $this->faker->dateTimeBetween('now', '+7 days'),
            'stop_time' => $this->faker->dateTimeBetween('+1 hour', '+8 days'),
            'status' => $this->faker->randomElement(['active', 'cancelled']),
        ];
    }
}
