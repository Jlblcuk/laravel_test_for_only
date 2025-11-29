<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\ComfortCategory;
use App\Models\Driver;
use App\Models\Position;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $positions = Position::factory(5)->create();
        $categories = ComfortCategory::factory(5)->create();
        $drivers = Driver::factory(10)->create();

        foreach ($positions as $position) {
            $position->comfortCategories()->attach(
                $categories->random(rand(1, 2))->pluck('id')
            );
        }

        $cars = Car::factory(10)->create([
            'driver_id' => fn() => $drivers->random()->id,
        ]);

        $users = User::factory(20)->create([
            'position_id' => fn() => $positions->random()->id,
        ]);

        Trip::factory(30)->create([
            'user_id' => fn() => $users->random()->id,
            'car_id' => fn() => $cars->random()->id,
        ]);
    }
}
