<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('adresse');
            $table->string('site_web');
            $table->string('code_postale');
            $table->string('ville');
            $table->string('pays');
            $table->integer('open_door');
            $table->unsignedInteger('channel_id');
            $table->foreign('channel_id')
                  ->references('id')
                  ->on('channels');
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
        Schema::drop('contacts');
    }
}
