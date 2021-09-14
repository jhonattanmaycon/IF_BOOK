<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('categoria')->nullable();
            $table->unsignedBigInteger('obra')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->string('message')->nullable(); //editor tinymce
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('obra')
                ->references('id')
                ->on('books');

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
  
        Schema::dropIfExists('posts');

    }
}
