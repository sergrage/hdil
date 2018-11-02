<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserAddInfoFirstCard extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('policy')->default(false);
            $table->integer('card')->default(0);
            $table->text('bio');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('facebook', 100);
            $table->string('twitter', 100);
            $table->string('linkedin', 100);
            $table->string('instagram', 100);
        });

        DB::table('users')->update([
            'info' => false,
            'card' => false,
        ]);
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('info');
            $table->dropColumn('card');
        });
    }
}
