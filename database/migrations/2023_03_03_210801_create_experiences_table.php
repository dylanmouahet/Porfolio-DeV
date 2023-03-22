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
        Schema::create('experiences', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("job_title");
            $table->string("compagny");
            $table->string("description")->nullable();
            $table->date("start_year")->nullable();
            $table->date("end_year")->nullable();
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
        Schema::dropIfExists('experiences');
    }
};
