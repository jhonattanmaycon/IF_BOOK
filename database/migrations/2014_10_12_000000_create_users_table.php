<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->unique();
            $table->string('realname')->nullable();
            $table->integer('followers')->default(0);
            $table->integer('follows')->default(0);
            $table->string('bio')->nullable();
            $table->string('music')->nullable();
            $table->string('hobbie')->nullable();

            $table->string('onebook')->nullable();
            $table->string('onemusic')->nullable();
            $table->string('onemovie')->nullable();

            $table->string('twobook')->nullable();
            $table->string('twomusic')->nullable();
            $table->string('twomovie')->nullable();

            $table->string('threebook')->nullable();
            $table->string('threemusic')->nullable();
            $table->string('threemovie')->nullable();

            $table->string('city')->nullable();
            $table->integer('years')->nullable();
            $table->string('roles')->default('common');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
