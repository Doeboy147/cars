<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{

    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('user_id');
            $table->string('maker');
            $table->string('model');
            $table->string('year');
            $table->string('price');
            $table->string('image');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
