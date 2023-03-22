<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->email,
            "message" => $this->faker->realText($maxNbChars = 500, $indexSize = 2),
            "is_read" => $this->faker->numberBetween($min = 0, $max = 1),
            // "user_id" => $user->id,
        ];
    }
}
