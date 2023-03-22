<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('color_1')->nullable();
            $table->string('color_2')->nullable();
            $table->string('color_3')->nullable();
            $table->string('color_4')->nullable();
            $table->string('color_5')->nullable();
            // TOPBAR parameters
            $table->string('top_bar_color')->nullable();
            $table->string('title_text_color')->nullable();
            $table->string('url_logo')->nullable();
            $table->string('nav_link_color')->nullable();
            // FIRST SECTION parameters
            // ....
            // $table->uuid('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
