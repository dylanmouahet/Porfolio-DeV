<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $start_date =  $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null);
        $end_date =  $this->faker->dateTimeBetween($startDate = $start_date, $endDate = 'now', $timezone = null);
        return [
            "title" => $this->faker->randomElement(["Bachelor's degree in Computer Science", "Mobile development online certificate", "Cyber Security online certificate"], 1),
            "school" => $this->faker->company,
            "date" => $start_date,
            "description" => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            "type" => $this->faker->randomElement(["diplome", "certification"], 1),
            "view" => rand(0, 1),
            "user_id" => $user->id,
        ];
    }
}
