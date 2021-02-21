<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_books', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('book');

            $table->foreign('post')
                ->references('id')
                ->on('posts');

            $table->foreign('book')
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
        Schema::dropIfExists('posts_books');
    }
}
