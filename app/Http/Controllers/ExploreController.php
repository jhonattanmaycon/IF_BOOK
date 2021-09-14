<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class ExploreController extends Controller
{
     public function explore() {
    	$dados = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.created_at', 'DESC')->select('posts.id','message','likes', 'obra','posts.created_at','posts.views', 'users.name', 'posts.image')->get();
      $dados2 = DB::table('comments')->join('users', 'users.id', '=', 'comments.user_id')->orderBy('comments.created_at', 'DESC')->select('users.name','users.id','text','comments.post_id','comments.created_at')->get();
      $verification = DB::table('likes')->join('users', 'users.id', '=', 'likes.user_id')->orderBy('likes.created_at', 'DESC')->get();
        //$verification = DB::table('likes')->where(['user_id'=>Auth::id()])->get();
    	//return view('templates.explore', ['dados'=>$dados, 'dadosuser'=>$dadosuser]);

      // $curtiu = DB::table('likes')
      // ->join('posts', 'posts.id', '=', 'likes.post_id')
      // ->join('users', 'users.id', '=', 'likes.user_id')
      // ->select('posts.id')->get();

      $curtiu = DB::table('posts')
      ->join('likes', 'likes.post_id', '=', 'posts.id')
      ->join('users', 'users.id', '=', 'posts.user_id')
      ->select('posts.id')->get();


      //dd($curtiu);

        return view('templates.explore', ['dados'=>$dados,'dados2'=>$dados2,'verification'=>$verification, 'curtiu'=>$curtiu]);
    }

    public function like($post_id){

      /*
        $dados = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.created_at', 'DESC')->get();
        $validate = DB::table('likes')->where(['user_id' => Auth::user()->id, 'post_id'=>$post_id])->count();
        $dados2 = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.created_at', 'DESC')->get();
        if (!$validate) {
          DB::table('likes')->insert([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
          ]);
          return view('templates.explore', ['dados'=>$dados, 'curtiu'=>true]);
        } 
        else {
          DB::table('likes')->where(['user_id' => Auth::user()->id, 'post_id'=>$post_id])->delete();
          return view('templates.explore', ['dados'=>$dados, 'curtiu'=>false]);
        }
        */

        $user_id = Auth::id();

        //checar se curtiu
        $resultado = DB::table('likes')
          ->join('posts', 'posts.id', '=', 'likes.post_id')
          ->join('users', 'users.id', '=', 'likes.user_id')
          ->where('likes.post_id', '=', $post_id)->count();

        
        if ($resultado) {
          //remover de likes
          DB::table('likes')->where(['post_id' => $post_id, 'user_id'=> $user_id])->delete();
        } else {
          DB::table('likes')->insert([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
          ]);
        }

        return redirect()->back();
           
    }

    public function Filtro(Request $request){
      if($request->filterCategoria == "zero"){
        $dados = Post::where('message', 'LIKE', "%{$request->filter}%")->get();
        return view('templates.explore', compact('dados'));
      }else{
        $dados = Post::where('message', 'LIKE', "%{$request->filter}%")->where('categoria', 'LIKE', "%{$request->filterCategoria}%")->get();
        return view('templates.explore', compact('dados'));
      }
    }
}
