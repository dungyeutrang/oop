<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('profile_img');
            $table->string('profile_comment');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('twitter_oauth_token');
            $table->string('twitter_oauth_secret');
            $table->rememberToken();
            $table->timestamps();
            $table->dateTime('modified_at');
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
