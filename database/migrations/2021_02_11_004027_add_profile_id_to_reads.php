<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileIdToReads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->foreign('profile_id')
                  ->references('id')
                  ->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reads', function (Blueprint $table) {
            //
        });
    }
}
