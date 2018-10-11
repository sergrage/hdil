<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{

    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->timestamps();
            $table->integer('likesNumber')->default(0);
            $table->integer('commentsNumber')->default(0);
            $table->integer('views')->default(0);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
