<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->engine =  'InnoDB';
            $table->increments('id');
            $table->string('main_title');
            $table->string('title');
            $table->string('description');
            $table->string('motivation'); //motivation to post this video
            $table->string('vid'); //sequence of characters to generate which will make it possible to make a reading of the video and make him unique
            $table->string('thumbnail'); //image that represents this video as a preview
            $table->time('duration'); //duration of video playback 
            $table->integer('request_monetize'); //request for monetization
            $table->string('is_monetize'); //is it monetizing ?
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('mainTopic_id');
            
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('mainTopic_id')
                  ->references('id')
                  ->on('main_topics');

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
        Schema::drop('videos');
    }
}
