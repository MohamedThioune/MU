<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSharesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('url');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('video_id');
            $table->foreign('video_id')
                  ->references('id')
                  ->on('videos');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
                  
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shares');
    }
}
