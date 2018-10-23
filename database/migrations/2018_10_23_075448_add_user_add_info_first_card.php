<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserAddInfoFirstCard extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('info')->default(false);
            $table->boolean('card')->default(false);
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
