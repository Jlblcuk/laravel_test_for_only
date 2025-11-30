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
        //$categories = ComfortCategory::factory(3)->create();
        $categories = collect([
            ComfortCategory::create(['name' => 'Эконом', 'level' => 1]),
            ComfortCategory::create(['name' => 'Комфорт', 'level' => 2]),
            ComfortCategory::create(['name' => 'Бизнес', 'level' => 3]),
        ]);
        $drivers = Driver::factory(20)->create();

        foreach ($positions as $position) {
            $position->comfortCategories()->attach(
                $categories->random(rand(1, 2))->pluck('id')
            );
        }

        $cars = Car::factory(20)->create([
            'driver_id' => fn() => $drivers->random()->id,
            'comfort_category_id' => fn () => $categories->random()->id,
        ]);

        $users = User::factory(10)->create([
            'position_id' => fn() => $positions->random()->id,
        ]);

        Trip::factory(30)->create([
            'user_id' => fn() => $users->random()->id,
            'car_id' => fn() => $cars->random()->id,
        ]);
    }
}
