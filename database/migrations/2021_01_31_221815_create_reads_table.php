<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReadsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->time('time_read');

            $table->unsignedInteger('video_id');
            $table->unsignedInteger('user_id');
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
        Schema::drop('reads');
    }
}
