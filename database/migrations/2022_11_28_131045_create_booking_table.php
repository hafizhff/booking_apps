<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('title');
            $table->string('email')->unique();
            $table->string('notes');
            $table->bigInteger('seat_id')->unsigned();
            $table->bigInteger('event_id')->unsigned();
            $table->foreign('seat_id')->references('id')->on('seat');
            $table->foreign('event_id')->references('id')->on('event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
