<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryArticle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("category_articles")->insert([
            ["libelle" => "Journée", "valeurEnHeure" => 24],
            ["libelle" => "Demi-journée", "valeurEnHeure" => 12]
        ]);
    }
}
