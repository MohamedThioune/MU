<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToChannel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->unsignedInteger('categoryprimary_id');
            $table->unsignedInteger('categorysecondary_id');
            
            $table->foreign('categorysecondary_id')
                  ->references('id')
                  ->on('category_secondaries');

            $table->foreign('categoryprimary_id')
                  ->references('id')
                  ->on('category_primaries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('channel', function (Blueprint $table) {
            //
        });
    }
}
