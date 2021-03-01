<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;

class PerfilController extends Controller
{
    public function perfil() {
    	$user = Auth::user();
;    	return view('perfil.home', ['user'=>$user]);
    }

    public function edit($id) {
  		$user = User::find($id);
        if($user) {
            return view('perfil.edit' , ['user'=>$user]);
        } 
        return redirect()->route('perfil.home');
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
