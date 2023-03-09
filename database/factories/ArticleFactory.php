<?php

namespace Database\Factories;

use App\Models\CategoryArticle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $category = CategoryArticle::inRandomOrder()->first();
        return [
            "title" => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            "description" => $this->faker->text($maxNbChars = 200),
            "article" => $this->faker->realText($maxNbChars = 1500, $indexSize = 2),
            "author" => $user->name,
            "url_img" => $this->faker->imageUrl($width = 640, $height = 480),
            "slug" => $this->faker->unique()->slug,
            "view_count" => $this->faker->numberBetween($min = 125, $max = 5000),
            "view" => $this->faker->numberBetween($min = 0, $max = 1),
            "category_article_id" => $category->id,
            "user_id" => $user->id,
        ];
    }
}
