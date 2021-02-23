<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ExploreController extends Controller
{
     public function explore() {
    	 $dados = Auth::user();
    	return view('templates.explore', ['user'=>$dados]);
    }
}
