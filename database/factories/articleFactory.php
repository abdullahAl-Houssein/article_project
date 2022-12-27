<?php

namespace Database\Factories;

use App\Models\User;
use Couchbase\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraph(20),
            'price' => fake()->randomDigit(),
            'user_id' => User::factory(),
        ];
    }
}
