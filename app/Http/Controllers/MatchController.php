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

    public function explorer() {
        $dados = Auth::user();
       return view('templates.cardmatch', ['user'=>$dados]);
   }
}
