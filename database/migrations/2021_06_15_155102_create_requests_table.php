<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('deal_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('amount');
            $table->integer('room_number');
            $table->timestamps();

            $table->foreign('deal_id')->references('id')->on('deals');
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
