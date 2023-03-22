<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $date =  $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null);
        return [
            "name" => $this->faker->jobTitle,
            "description" => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            "icon" => "app",
            "view" => rand(0, 1),
            // "user_id" => $user->id,
        ];
    }
}
