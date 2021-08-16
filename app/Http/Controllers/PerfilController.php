<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PhpParser\Node\Expr\FuncCall;

class PerfilController extends Controller
{

  public function store(Request $request)
  {
      $request->validate([
          'nome' => 'required|min:2|max:15',
          'bio' => 'max:30',
          'music' => 'max:20',
          'hobbie' => 'max:20',
          'city' => 'required|min:3|max:15',
          'years' => 'required|max:3',
      ]);
          
    }




    public function perfil() {
    	$user = Auth::user();
      
      $amigos = $user->amigos;

      $posts = DB::table('posts')->where(['user_id'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();

      //$follows = DB::table('user_follow_user')->where(['user_1'=>Auth::id()])->count();
      //$followers = DB::table('user_follow_user')->where(['user_2'=>Auth::id()])->count();

      //$listafollows = DB::table('user_follow_user')->where(['user_1'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();
      //$listafollowers = DB::table('user_follow_user')->where(['user_2'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();

      //return view('perfil.home', ['user'=>$user, 'posts'=>$posts,'follows'=>$follows, 'followers'=>$followers, 'listafollows'=>$listafollows, 'listafollowers'=>$listafollowers, 'amigos'=>$amigos]);
      return view('perfil.home', ['user'=>$user, 'posts'=>$posts, 'amigos'=>$amigos]);
    }

    public function perfilview(User $user) {
      $amigos = $user->amigos;
      $posts = DB::table('posts')->where(['user_id'=>$user->id])->OrderBy('created_at', 'DESC')->get();
     // $follows = DB::table('user_follow_user')->where(['user_1'=>$user->id])->count();
     // $followers = DB::table('user_follow_user')->where(['user_2'=>$user->id])->count();
      $verification = DB::table('user_follow_user')->where(['user_1'=>Auth::id(),'user_2'=>$user->id])->count();

     // $listafollows = DB::table('user_follow_user')->where(['user_1'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();
     // $listafollowers = DB::table('user_follow_user')->where(['user_2'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();

     // return view('perfil.home', ['user'=>$user, 'posts'=>$posts, 'follows'=>$follows, 'followers'=>$followers,  'verification'=>$verification,'listafollows'=>$listafollows, 'listafollowers'=>$listafollowers]);
     return view('perfil.home', ['user'=>$user, 'posts'=>$posts, 'verification'=>$verification,'amigos'=>$amigos]);
    }

    public function edit($id) {

  		$user = User::find($id);

      if(Gate::forUser($user)->allows('update-perfil', $user)) {
         return view('perfil.edit' , ['user'=>$user]);
      }
      else{
        return redirect()->back();
      }
      
      
       
  	}


  	public function update (Request $request, $id){

      // $user = new User();
      $data = $request->all();
  		$user = User::find($id);

  		$user->realname = $request->post('name');
      $user->city = $request->post('cidade');
      $user->years = $request->post('idade');

      $user->bio = $request->post('bio');
      $user->hobbie = $request->post('hobbie');
      $user->music = $request->post('music');

      $user->onemusic = $request->post('onemusic');
      $user->onebook = $request->post('onebook');
      $user->onemovie = $request->post('onemovie');
      
      $user->twomusic = $request->post('twomusic');
      $user->twobook = $request->post('twobook');
      $user->twomovie = $request->post('twomovie');

      $user->threemusic = $request->post('threemusic');
      $user->threebook = $request->post('threebook');
      $user->threemovie = $request->post('threemovie');

      if(isset($request->photo)){

      $nameFile = Str::camel($user->name) . $id .".". $request->photo->extension();

        $request->photo->storeAs('imgphotos', $nameFile);
        
        $user->photo = $nameFile;
      }

  		$user->save();

  		return redirect()->route('perfil.home');
  	}

    public function friends($user_2){
      $validate = DB::table('user_follow_user')->where(['user_1' => Auth::user()->id, 'user_2'=>$user_2])->count();
      //$validate = Auth::user()->user_follow_user()->where('user_2', $user_2->id)->count();
      if (!$validate) {
        DB::table('user_follow_user')->insert([
          'user_1' => Auth::user()->id,
          'user_2' => $user_2,
        ]);
        return redirect()->route('perfil.explore', ['user' => $user_2]);
      } 
      else {
        DB::table('user_follow_user')->where(['user_1' => Auth::user()->id, 'user_2'=>$user_2])->delete();
        return redirect()->route('perfil.explore', ['user' => $user_2]);
      }
    }


}
