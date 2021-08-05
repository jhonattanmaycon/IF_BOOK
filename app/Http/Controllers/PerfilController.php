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
      $posts = DB::table('posts')->where(['user_id'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();
      return view('perfil.home', ['user'=>$user, 'posts'=>$posts]);
    }

    public function perfilview(User $user) {
      $posts = DB::table('posts')->where(['user_id'=>$user->id])->OrderBy('created_at', 'DESC')->get();
      return view('perfil.home', ['user'=>$user, 'posts'=>$posts]);
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
}
