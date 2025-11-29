<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ComfortCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->randomElement(['Toyota', 'Subaru', 'BMW', 'Kia', 'Mersedes']),
            'number_plate' => $this->faker->unique()->regexify('[A-Z]{1}[0-9]{3}[A-Z]{2}'),
            'comfort_category_id' => ComfortCategory::factory(),
        ];
    }
}
