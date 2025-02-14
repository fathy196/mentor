<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory(50)->create();
        
        // // Create 10 categories
        // Category::factory(10)->create();

        // // Create 10 trainers
        // Trainer::factory(10)->create();

        // // Create 50 courses with random trainers and categories
        // Course::factory(50)->create();
    }
}
