<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentsParentBan extends Migration
{
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->boolean('claim')->default(false);
            $table->integer('parent_id')->nullable();
        });
    }

    public function down()
    {
       Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('claim');
            $table->dropColumn('parent_id');
        });
    }
}
