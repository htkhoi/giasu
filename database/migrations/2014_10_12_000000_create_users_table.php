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
            //Info user default
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('avatar');
            $table->string('age');
            $table->string('birthday');
            $table->boolean('gender');
            $table->string('password', 60);
            $table->string('registration_type', 32);
            //Info user register facebook
            $table->string('facebook_id', 100)->unique();
            $table->string('facebook_token', 100);
            $table->string('facebook_name', 200);
            $table->string('facebook_email', 200)->unique();
            $table->string('facebook_phone', 60);
            $table->string('facebook_avatar', 200);
            $table->rememberToken();
            $table->timestamps();
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
