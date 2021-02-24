<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->String('response_value');

            $table->unsignedInteger('comment_id');
            
            $table->foreign('comment_id')
            ->references('id')
            ->on('comments');

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
        Schema::dropIfExists('response_comments');
    }
}
