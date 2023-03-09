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
        Schema::create('formations', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title");
            $table->string("school");
            $table->date("date");
            $table->string("description")->nullable();
            $table->enum("type", ["diplome", "certification"])->nullable(); // 1-> Displome, 2 -> Certificate
            $table->boolean("view")->default(true);
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
        Schema::dropIfExists('formations');
    }
};
