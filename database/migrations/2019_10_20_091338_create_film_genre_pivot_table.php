<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmGenrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_genre_pivot', function (Blueprint $table) {
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('genre_id');

            $table->primary(['film_id', 'genre_id']);

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_genre_pivot');
    }
}
