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

	$dados2 = DB::table('comments')->join('users', 'users.id', '=', 'comments.user_id')->orderBy('comments.created_at', 'DESC')->select('users.name','users.id','text','comments.post_id','comments.created_at')->get();
	$obras = DB::table('books')->get();

	//return view('templates.feed', ['user'=>$user,'dados'=>$dados,'amigos'=>$amigos]);

	return view('templates.feed', ['user'=>$user,'dados'=>$dados, 'dados2'=>$dados2, 'obras'=>$obras]);
}

public function like($post_id){
	$user = Auth::user();
	$dados = $user->carregar_feed();

	$validate = DB::table('likes')->where(['user_id' => Auth::user()->id, 'post_id'=>$post_id])->count();

	if (!$validate) {
	  DB::table('likes')->insert([
		'user_id' => Auth::user()->id,
		'post_id' => $post_id,
	  ]);
	  return view('templates.feed', ['dados'=>$dados, 'user'=>Auth::user()->id]);
	} 
	else {
	  DB::table('likes')->where(['user_id' => Auth::user()->id, 'post_id'=>$post_id])->delete();
	  return view('templates.feed', ['dados'=>$dados, 'user'=>Auth::user()->id]);
	}
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
