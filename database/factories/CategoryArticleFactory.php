<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryArticle>
 */
class CategoryArticleFactory extends Factory
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
            "name" => $this->faker->randomElement(["Mobile", "Dev", "Design", "Web", "Other"], 1),
            // "user_id" => $user->id,
        ];
    }
}
