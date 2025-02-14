<?php

namespace Database\Factories;

use App\Models\Trainer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Trainer::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(['role' => 'trainer'])->id, 
            'specialization' => $this->faker->jobTitle(),
            'bio' => $this->faker->paragraph(),
            'experience_years' => $this->faker->numberBetween(1, 20),
            'social_links' => json_encode([
                'facebook' => $this->faker->url(),
                'twitter' => $this->faker->url(),
            ]),
        ];
    }
}
