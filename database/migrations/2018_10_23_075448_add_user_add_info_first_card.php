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
            $table->text('bio')->nullable();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('linkedin', 100)->nullable();
            $table->string('instagram', 100)->nullable();
        });

        DB::table('users')->update([
            'policy' => false,
            'card' => 0,
        ]);
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('policy');
            $table->dropColumn('card');
            $table->dropColumn('bio');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
            $table->dropColumn('instagram');
        });
    }
}
