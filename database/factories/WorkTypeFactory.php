<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkType>
 */
class WorkTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'created_at' => now()->subDays(rand(1,30))->subMinutes(rand(0,59))->subHours(rand(0,23)),
            'updated_at' => now()->subDays(rand(1,30))->subMinutes(rand(0,59))->subHours(rand(0,23)),
        ];
    }
}
