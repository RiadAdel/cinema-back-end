<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->primary(['movie_id','genre_id']);
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
        Schema::dropIfExists('movie_genres');
    }
}
