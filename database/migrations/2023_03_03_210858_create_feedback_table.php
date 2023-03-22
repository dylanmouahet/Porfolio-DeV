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
        Schema::create('feedback', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("name");
            $table->integer("note");
            $table->string("commentary");
            $table->string("job_title")->nullable();
            $table->string("compagny")->nullable();
            $table->date("date")->nullable();
            $table->text("url_photo")->nullable();
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
        Schema::dropIfExists('feedback');
    }
};
