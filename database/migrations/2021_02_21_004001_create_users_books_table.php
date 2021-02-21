<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_books', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('book');

            //indica status de leitura sobre o livro
            $table->boolean('has');
            $table->boolean('reading');
            $table->boolean('read');
            $table->boolean('left');
            $table->boolean('toRead');

            $table->integer('rating');

            $table->foreign('user')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('users_books');
    }
}
