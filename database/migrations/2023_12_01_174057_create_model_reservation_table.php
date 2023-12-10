<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelReservationTable extends Migration
{
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_book')->unsigned();
            $table->foreign('id_user')->references('id')->on('book')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('days');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}