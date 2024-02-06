<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWallPostRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wall_post_rating', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('wall_post_id')->constrained('wall_posts')->cascadeOnDelete();
            $table->boolean('is_like');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wall_post_rating');
    }
}
