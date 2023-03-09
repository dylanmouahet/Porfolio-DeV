<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Article;
use App\Models\CategoryArticle;
use App\Models\Experience;
use App\Models\Feedback;
use App\Models\Formation;
use App\Models\Message;
use App\Models\Projet;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        CategoryArticle::factory(20)->create();
        About::factory(5)->create();
        Article::factory(15)->create();
        Experience::factory(20)->create();
        Feedback::factory(15)->create();
        Formation::factory(15)->create();
        Message::factory(50)->create();
        Projet::factory(30)->create();
        Service::factory(35)->create();
        Skill::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
