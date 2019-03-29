<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengeTable extends Migration
{

    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('skill');
            $table->string('email')->nullable();
            $table->string('status');
            $table->string('verify_token')->nullable()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('challenges');
    }
}
