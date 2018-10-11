<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRoleStatusImageLikesNumberCommentsNumberSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status', 16);
            $table->string('verify_token')->nullable()->unique();
            $table->string('role', 16);
            $table->string('image')->nullable();
            $table->string('slug');
            $table->integer('likesNumber')->nullable();
            $table->integer('commentsNumber')->nullable();
        });

        DB::table('users')->update([
            'role' => 'user',
            'status' => 'active',
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('verify_token');
            $table->dropColumn('role');
            $table->dropColumn('image');
            $table->dropColumn('slug');
        });
    }
}
