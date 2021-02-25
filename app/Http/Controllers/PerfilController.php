<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PerfilController extends Controller
{
    public function perfil() {
    	$user = Auth::user();
    	return view('perfil.home', ['user'=>$user]);
    }

    public function edit($id) {
  		$user = User::find($id);
        if($user) {
            return view('perfil.edit' , ['user'=>$user]);
        } 
        return redirect()->route('perfil.home');
  	}


  	public function update (Request $request, $id){

  		$user = User::find($id);

  		$user->name = $request->post('name');

  		$user->save();

  		return redirect()->route('perfil.home');
  	}
}
