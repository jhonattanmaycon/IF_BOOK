<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
Use Illuminate\Support\Facades\DB;

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
	// $dados = DB::table('posts')->OrderBy('created_at', 'DESC')->get();
	$user = Auth::user();
	// $amigos = $user->meus_seguidores();
	$dados = $user->carregar_feed();
	//return view('templates.feed', ['user'=>$user,'dados'=>$dados,'amigos'=>$amigos]);

	return view('templates.feed', ['user'=>$user,'dados'=>$dados]);
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
