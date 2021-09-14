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
    	 $dados = DB::table('posts')->join('users', 'users.id', '=', 'posts.user_id')->orderBy('posts.created_at', 'DESC')->get();

    	//return view('templates.explore', ['dados'=>$dados, 'dadosuser'=>$dadosuser]);
        return view('templates.explore', ['dados'=>$dados]);
     }

         public function Filtro(Request $request)
    {

      if($request->filterCategoria == "zero"){

           $dados = Post::where('message', 'LIKE', "%{$request->filter}%")->get();

        

             return view('templates.explore', compact('dados'));

      }else{

          $dados = Post::where('message', 'LIKE', "%{$request->filter}%")->where('categoria', 'LIKE', "%{$request->filterCategoria}%")->get();

          return view('templates.explore', compact('dados'));
      }

      
      
      
    }

    //      public function FiltroCategoria(Request $request)
    // {
    //     $dados = Post::where('categoria', 'LIKE', "%{$request->filterCategoria}%")

    //     ->paginate(); 



    //     return view('templates.explore', compact('dados'));
    }
    

