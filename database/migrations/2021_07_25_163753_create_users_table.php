<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->char('sex');
            $table->integer('age');
            $table->string('phone');
            $table->string('password');
            $table->integer('state');
            $table->string('type');
            $table->string('adresse');
            $table->string('town');
            $table->string('postalCode');
            $table->string('date');
            $table->date('date');
            $table->datetime('timeout');
            $table->integer('can_upload');
            $table->string('country');
            $table->integer('is_valid');
            $table->integer('is_confirmed');
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
        Schema::drop('users');
    }
}
