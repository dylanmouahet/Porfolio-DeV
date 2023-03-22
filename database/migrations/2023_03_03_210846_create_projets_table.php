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
        Schema::create('projets', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("name");
            $table->string("description")->nullable();
            $table->string("url")->nullable();
            $table->text("url_img")->nullable();
            $table->enum("category", ["design", "web app", "mobile app", "website", "other"]);
            $table->boolean("view")->default(true);
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
        Schema::dropIfExists('projets');
    }
};
