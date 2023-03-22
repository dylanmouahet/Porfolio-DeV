<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
            "name" => $this->faker->randomElement(["HTML", "CSS", "JavaScript", "Bootstrap", "Node.JS", "PHP", "Laravel", "JAVA", "Python", "Flutter"],1),
            "level" => rand(30, 100),
            "view" => rand(0, 1),
            // "user_id" => $user->id,
        ];
    }
}
