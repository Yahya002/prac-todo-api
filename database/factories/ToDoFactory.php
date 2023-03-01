<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDo>
 */
class ToDoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'task_text' => fake()->text(32),
            'due_at' => rand(0, 5) > 0 ? fake()->dateTimeThisYear() : null,
            'completed' => 0,
        ];
    }
}
