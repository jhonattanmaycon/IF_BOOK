<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	//fabricando usuários, posts e comentários
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(50)->create();
        \App\Models\Comment::factory(200)->create();

        //associando likes aos posts
        foreach (\App\Models\Post::all() as $post) {
        	
        	$post_id = $post->id;
        	$users = \App\Models\User::take(5)
          ->inRandomOrder()
          ->get();
          foreach ($users as $user) {
              DB::table('likes')->insert([
                 'user_id' => $user->id,
                 'post_id' => $post_id,
                 'created_at' => \Carbon\Carbon::now(),
                 'updated_at' => \Carbon\Carbon::now(),
             ]);
          }
      }


      \App\Models\Book::factory(50)->create();

      foreach(\App\Models\User::all() as $user) {
        

        for ($i=0; $i < rand(1,10); $i++) { 
         
            
            $book = \App\Models\Book::inRandomOrder()->first();

            $has = 0;
            $reading = 0;
            $read = 0;
            $left = 0;
            $toRead = 0;
            $rating = 0;
                //se tem o livro
            if(array_rand(range(0,1))) {
                    //Está lendo, leu ou abandonou
                $has = 1;
                $reading = 0;
                $read = 0;
                $left = 0;
                switch (array_rand(range(1,3)) ) {
                    case 1:
                    $reading = 1;
                    break;
                    case 2:
                    $read = 1;
                    break;
                    case 3:
                    $left = 1;
                    break;                  
                }

                $rating = array_rand(range(0,10));

            } else {
                $toRead = 1;
            }

            DB::table('users_books')->insert([
                'has' => $has,
                'reading' => $reading,
                'read' => $read,
                'left' => $left,
                'toRead' => $toRead,
                'user_id' => $user->id,
                'book_id' => $book->id,
                'rating' => $rating,
            ]);


        }

    }

        //associando livros a posts
    foreach (\App\Models\Post::all() as $post) {
       
       DB::table('posts_books')->insert([
          'post_id' => $post->id,
          'book_id' => \App\Models\Book::inRandomOrder()->first()->id,
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now(),
      ]);
   }

}
}
