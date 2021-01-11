<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->string('movie_year');
            $table->string('slug');
            $table->string('category');
            $table->string('image');
            $table->string('video');
            $table->tinyInteger('new_movie');
            $table->tinyInteger('action_movie');
            $table->tinyInteger('horror_movie');
            $table->tinyInteger('animation_movie');
            $table->tinyInteger('thriller_movie');
            $table->tinyInteger('comedy_movie');
            $table->tinyInteger('romance_movie');
            $table->tinyInteger('scifi_movie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
