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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title");
            $table->string("description")->nullable();
            $table->text("article");
            $table->string("author");
            $table->text("url_img");
            $table->string("slug");
            $table->integer("view_count")->default(0);
            $table->boolean("view")->default(true);
            $table->uuid('category_article_id');
            $table->foreign('category_article_id')->references('id')->on('category_articles');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
