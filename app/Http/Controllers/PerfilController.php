<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PerfilController extends Controller
{
    public function perfil(User $user) {
    	return view('perfil.home', ['user'=>$user]);
    }
}
