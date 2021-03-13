<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class PerfilController extends Controller
{
    public function perfil() {

    	$user = Auth::user();
      $posts = DB::table('posts')->where(['user_id'=>Auth::id()])->OrderBy('created_at', 'DESC')->get();
;    	return view('perfil.home', ['user'=>$user, 'posts'=>$posts]);
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

  		$user->name = $request->post('name');
      $user->city = $request->post('cidade');
      $user->years = $request->post('idade');

      if(isset($request->photo)){

      $nameFile = Str::camel($user->name) . $id .".". $request->photo->extension();

        $request->photo->storeAs('imgphotos', $nameFile);
        
        $user->photo = $nameFile;
      }

  		$user->save();

  		return redirect()->route('perfil.home');
  	}
}
