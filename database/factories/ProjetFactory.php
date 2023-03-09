<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
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
            "description" => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            "url" => $this->faker->domainName,
            "url_img" => $this->faker->imageUrl($width = 640, $height = 480),
            "category" => $this->faker->randomElement(["design", "web app", "mobile app", "website", "other"]),
            "view" => rand(0, 1),
            "user_id" => $user->id,
        ];
    }
}
