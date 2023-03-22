<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
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
            "description" => $this->faker->jobTitle,
            "bith_date" => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            "email" => $this->faker->email,
            "adress" => $this->faker->address,
            "year_xp_number" => $this->faker->numberBetween($min = 10, $max = 25),
            "client_number" => $this->faker->numberBetween($min = 5, $max = 15),
            "url_cv" => $this->faker->imageUrl($width = 640, $height = 480),
            "url_photo" => $this->faker->imageUrl($width = 640, $height = 480),
            "tel_1" => $this->faker->e164PhoneNumber,
            "tel_2" => $this->faker->tollFreePhoneNumber,
            "facebook" => $this->faker->url,
            "instagram" => $this->faker->url,
            "twitter" => $this->faker->url,
            "github" => $this->faker->url,
            "linkedin" => $this->faker->url,
            // "user_id" => $user->id,
        ];
    }
}
