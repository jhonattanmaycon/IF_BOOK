<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersFollowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_followers', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('follower');
            $table->UnsignedBigInteger('followed');

            $table->foreign('follower')
            ->references('id')
            ->on('users'); 
            $table->foreign('followed')
            ->references('id')
            ->on('users');      
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
