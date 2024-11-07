<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'year_of_publication' => fake()->year(),
            'code' => fake()->uuid(),
            'work_type_id' => fake()->numberBetween(3, 10),
            'number_of_volumes' => fake()->numberBetween(1, 300),
            'is_available' => fake()->boolean(85),
            'created_at' => now()->subDays(rand(1, 30))->subMinutes(rand(0, 59))->subHours(rand(0, 23)),
            'updated_at' => now()->subDays(rand(1, 30))->subMinutes(rand(0, 59))->subHours(rand(0, 23)),

        ];
    }

    public function books(): WorkFactory|Factory
    {
        return $this->state(fn(array $attributes) => [
            'work_type_id' => 1,
            'number_of_pages' => fake()->numberBetween(1, 1000),
        ]);
    }
    public function dvds(): WorkFactory|Factory
    {
        return $this->state(fn(array $attributes) => [
            'work_type_id' => 2,
            'number_of_pages' => 0,
        ]);
    }
}
