<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

use Illuminate\Support\Facades\DB;



class MatchController extends Controller
{
    public function match() {
    	$user = Auth::user();    
      $eventos1 = DB::table('matchs')->where(['user_2'=>$user->id, 'love'=>true])->join('users', 'users.id', '=', 'matchs.user_1')->OrderBy('matchs.created_at', 'DESC')->select('matchs.created_at','users.name', 'users.photo', 'users.id')->get();

    	return view('templates.match', ['user'=>$user, 'eventos1'=>$eventos1]);
    }

    //onde é mostrado o perfil de outros users
    public function explorer() {
        $auth = Auth::user();
        
        //$user = DB::table('users')->where('id', '<>', $auth->id)->orwhere(['bio'=>$auth->bio])->orWhere(['music'=>$auth->music])->inRandomOrder()->limit(1)->first();

        $user = DB::table('users')->where(['hobbie'=>$auth->hobbie])->orWhere(['music'=>$auth->music])->orWhere(['onebook'=>$auth->onebook])->orWhere(['twobook'=>$auth->twobook])->orWhere(['threebook'=>$auth->threebook])->orWhere(['onemovie'=>$auth->onemovie])->orWhere(['twomovie'=>$auth->twomovie])->orWhere(['threemovie'=>$auth->threemovie])->orWhere(['onemusic'=>$auth->onemusic])->orWhere(['twomusic'=>$auth->twomusic])->orWhere(['threemusic'=>$auth->threemusic])->inRandomOrder()->limit(1)->first();
        $seguidores = DB::table('user_follow_user')->where(['user_2'=> $user->id])->count();

        
      $validate = DB::table('matchs')->where(['user_1' =>$auth->id, 'user_2'=>$user->id])->count();

      if ($validate ||  $user->id == $auth->id) {

        return route('cardmatch');
      
      }


      if($user->music != null || $user->hobbie != null ){
      
        if($user->music == $auth->music || $user->hobbie == $auth->hobbie ){
          $interesse = "(".$user->music.") como música do momento e (".$interesse = $user->hobbie.") como hobbie";
          return view('templates.cardmatch', ['user'=>$user, 'interesse'=>$interesse,'seguidores'=>$seguidores]);
        }

      }
      if($user->onebook != null || $user->twobook != null || $user->threebook != null){

          if($user->onebook || $user->twobook || $user->threebook == $auth->onebook || $user->onebook || $user->twobook || $user->threebook == $auth->twobook || $user->onebook || $user->twobook || $user->threebook == $auth->threebook){
            $interesse = "(".$user->onebook.") como o melhor livro, (".$user->twobook.") como segundo melhor e (".$user->threebook.") como terceiro melhor";
            return view('templates.cardmatch', ['user'=>$user, 'interesse'=>$interesse,'seguidores'=>$seguidores]);
          }

      }
      if($user->onemovie != null || $user->twomovie != null || $user->threemovie != null){

        if($user->onemovie || $user->twomovie || $user->threemovie  == $auth->onemovie || $user->onemovie || $user->twomovie || $user->threemovie == $auth->twomovie || $user->onemovie || $user->twomovie || $user->threemovie == $auth->threemovie){
          $interesse = "(".$user->onemovie.") como o melhor filme, (".$user->twomovie.") como segundo melhor e (".$user->threemovie.") como terceiro melhor";
          return view('templates.cardmatch', ['user'=>$user, 'interesse'=>$interesse,'seguidores'=>$seguidores]);
        }

      }
      if($user->onemusic != null || $user->twomusic != null || $user->threemusic != null){

        if($user->onemusic || $user->twomusic || $user->threemusic  == $auth->onemusic || $user->onemusic || $user->twomusic || $user->threemusic == $auth->twomusic || $user->onemusic || $user->twomusic || $user->threemusic == $auth->threemusic){
          $interesse = "(".$user->onemusic.") como a melhor música, (".$user->twomusic.") como segunda melhor e (".$user->threemusic.") como terceira melhor";
          return view('templates.cardmatch', ['user'=>$user, 'interesse'=>$interesse,'seguidores'=>$seguidores]);
        }
        
      }
       

       
   }
   public function love($user) {
     $validate = DB::table('matchs')->where(['user_1' => Auth::user()->id, 'user_2'=>$user])->count();
     //$validate = Auth::user()->user_follow_user()->where('user_2', $user_2->id)->count();
     if (!$validate) {
       DB::table('matchs')->insert([
         'user_1' => Auth::user()->id,
         'user_2' => $user,
         'love' => true,
       ]);
       $eventos1 = DB::table('matchs')->where(['user_2'=>Auth::user()->id])->join('users', 'users.id', '=', 'matchs.user_1')->OrderBy('matchs.created_at', 'DESC')->select('matchs.created_at','users.name', 'users.photo', 'users.id')->get();
       return view('templates.match', ['user'=>Auth::user(), 'eventos1'=> $eventos1]);
     } 
     $eventos1 = DB::table('matchs')->where(['user_2'=>Auth::user()->id])->join('users', 'users.id', '=', 'matchs.user_1')->OrderBy('matchs.created_at', 'DESC')->select('matchs.created_at','users.name',  'users.photo', 'users.id')->get();
     return view('templates.match', ['user'=>Auth::user(), 'eventos1'=> $eventos1]);
     }

     public function nolove($user) {
      $validate = DB::table('matchs')->where(['user_1' => Auth::user()->id, 'user_2'=>$user])->count();
      //$validate = Auth::user()->user_follow_user()->where('user_2', $user_2->id)->count();
      if (!$validate) {
        DB::table('matchs')->insert([
          'user_1' => Auth::user()->id,
          'user_2' => $user,
          'love' => false,
        ]);
        $eventos1 = DB::table('matchs')->where(['user_2'=>Auth::user()->id])->join('users', 'users.id', '=', 'matchs.user_1')->OrderBy('matchs.created_at', 'DESC')->select('matchs.created_at','users.name', 'users.photo', 'users.id')->get();
        return view('templates.match', ['user'=>Auth::user(), 'eventos1'=> $eventos1]);
      } 
      $eventos1 = DB::table('matchs')->where(['user_2'=>Auth::user()->id])->join('users', 'users.id', '=', 'matchs.user_1')->OrderBy('matchs.created_at', 'DESC')->select('matchs.created_at','users.name',  'users.photo', 'users.id')->get();
      return view('templates.match', ['user'=>Auth::user(), 'eventos1'=> $eventos1]);
      }

    }


