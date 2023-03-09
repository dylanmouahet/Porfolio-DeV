<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
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
            "name" => $this->faker->name,
            "note" => rand(3, 5),
            "commentary" => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            "job_title" => $this->faker->jobTitle,
            "compagny" => $this->faker->company,
            "date" => $date,
            "url_photo" => $this->faker->imageUrl($width = 640, $height = 480),
            "view" => rand(0, 1),
            "user_id" => $user->id,
        ];
    }
}
