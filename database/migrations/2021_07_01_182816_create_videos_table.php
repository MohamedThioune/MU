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
            $table->increments('id');
            $table->string('main_title');
            $table->string('title');
            $table->string('description');
            $table->string('motivation');
            $table->string('vid');
            $table->string('thumbnail');
            $table->string('duration');
            $table->string('online');
            $table->integer('sistas');
            $table->integer('request_monetize');
            $table->integer('is_monetize');
            $table->integer('user_id');
            $table->integer('subtopic_id');
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
