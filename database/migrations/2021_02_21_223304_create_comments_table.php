<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->String('value');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->unsignedInteger('video_id');
            $table->foreign('video_id')
            ->references('id')
            ->on('videos');

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
        Schema::drop('comments');
    }
}
