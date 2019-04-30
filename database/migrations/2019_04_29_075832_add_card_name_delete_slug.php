<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCardNameDeleteSlug extends Migration
{
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('name', 255);

        });
    }

    public function down()
    {
        Schema::dropIfExists('name');
    }
}
