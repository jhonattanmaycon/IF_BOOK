<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PerfilController extends Controller
{
    public function perfil() {
    	 $dados = Auth::user();
    	return view('templates.perfil', ['user'=>$dados]);
    }
}
