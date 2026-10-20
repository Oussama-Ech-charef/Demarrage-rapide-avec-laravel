<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::query()->create([
            'name' => 'Informatique',
            'desc' => 'Ordinateurs et accessoires informatiques.',
        ]);
        Category::query()->create([
            'name' => 'Électronique',
            'desc' => 'Appareils et équipements électroniques.',
        ]);
        Category::query()->create([
            'name' => 'Livres',
            'desc' => 'Livres et supports de lecture.',
        ]);
    }
}
