<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Course::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 50, 1000),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'trainer_id' => Trainer::inRandomOrder()->first()->id ?? Trainer::factory(),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'image' => $this->faker->imageUrl(640, 480, 'education'),

        ];
    }
}
