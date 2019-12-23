<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_username');
            $table->unsignedBigInteger('seat_id');
            $table->unsignedBigInteger('screening_id');
            $table->foreign('user_username')->references('username')->on('users');
            $table->foreign('seat_id')->references('id')->on('seats');
            $table->foreign('screening_id')->references('id')->on('screening');
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
        Schema::dropIfExists('tickets');
    }
}
