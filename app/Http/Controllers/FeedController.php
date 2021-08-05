<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

use App\Models\{
	Post
};

class FeedController extends Controller
{

    public function __construct(){
		$this->middleware(['auth']);
	}

/*   Parte pra verificar amizade 

    public function library(User $user){
		
		$books = $user->books;

		return view('templates.library', ['user' => $user, 'books' => $books]);
	}
    
*/   

public function feed() {
	$dados = Auth::user();
	return view('templates.feed', ['user'=>$dados]);
}
	/* 
    public function feed(Post $posts) {
    	 $dados = Auth::user();
        // $post = $post->where('user_id', $dados->id);
         $postagem = $posts->message;
    	 return view('templates.feed', ['user'=>$dados, 'posts'=>$postagem]);
    }
	*/
}
