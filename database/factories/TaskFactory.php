<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();

        while(count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->text(30),
            'description' => fake()->text(60),
            'due_date' => fake()->datetime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
            //
        ];
    }
}
