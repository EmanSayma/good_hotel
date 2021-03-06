<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('meta_description')->nullable();
            $table->text('description');
            $table->text('how_it_works');
            $table->decimal('total_amount');
            $table->decimal('discount_amount')->default(0);
            $table->string('currency');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tags');

        });
    }

    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
