<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $start_date =  $this->faker->dateTimeBetween($startDate = '-20 years', $endDate = 'now', $timezone = null);
        $end_date =  $this->faker->dateTimeBetween($startDate = $start_date, $endDate = 'now', $timezone = null);
        return [
            "job_title" => $this->faker->randomElement(["Lead DEV WEB", "Mobile Developer ", "Web Designer", "DevOps ingeneer", "IA Expert"], 1),
            "compagny" => $this->faker->company,
            "description" => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            "start_year" => $start_date,
            "end_year" => $end_date,
            "view" => rand(0,1),
            // "user_id" => $user->id,
        ];
    }
}
