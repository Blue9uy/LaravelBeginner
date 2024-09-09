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
        Schema::create('vocalists_songs', function (Blueprint $table) {
            $table->unsignedInteger('vocalist_id');
            $table->unsignedInteger('song_id');
            $table->integer('release_year');
            $table->foreign('vocalist_id')->references('id')->on('vocalists');
            $table->foreign('song_id')->references('id')->on('songs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vocalists_songs');
    }
};
