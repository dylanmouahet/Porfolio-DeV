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
        Schema::create('abouts', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("name");
            $table->string("description");
            $table->date("bith_date");
            $table->string("email")->unique();
            $table->string("adress")->nullable();
            $table->integer("year_xp_number")->nullable();
            $table->integer("client_number")->nullable();
            $table->text("url_cv")->nullable();
            $table->text("url_photo")->nullable();
            $table->string("tel_1")->nullable();
            $table->string("tel_2")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("github")->nullable();
            $table->string("linkedin")->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
