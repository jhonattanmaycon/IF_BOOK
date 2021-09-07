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
        $verification = DB::table('likes')->join('users', 'users.id', '=', 'likes.user_id')->orderBy('likes.created_at', 'DESC')->get();
        //$verification = DB::table('likes')->where(['user_id'=>Auth::id()])->get();
    	//return view('templates.explore', ['dados'=>$dados, 'dadosuser'=>$dadosuser]);

        return view('templates.explore', ['dados'=>$dados,'verification'=>$verification]);
    }

    public function like($post_id){
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
    }
}
