<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRoleStatusImageLikesNumberCommentsNumberSlug extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status', 16);
            $table->string('verify_token')->nullable()->unique();
            $table->string('role', 16);
            $table->string('image')->nullable();
            $table->string('slug');
            $table->integer('likesNumber')->default(0);
            $table->integer('commentsNumber')->default(0);
        });

        DB::table('users')->update([
            'role' => 'user',
            'status' => 'active',
        ]);
   
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('verify_token');
            $table->dropColumn('role');
            $table->dropColumn('image');
            $table->dropColumn('slug');
        });
    }
}
