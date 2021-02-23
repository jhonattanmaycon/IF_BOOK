<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class MatchController extends Controller
{
     public function match() {
    	 $dados = Auth::user();
    	return view('templates.match', ['user'=>$dados]);
    }
}
