<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LibraryController extends Controller
{
     public function library() {
    	 $dados = Auth::user();
    	return view('templates.library', ['user'=>$dados]);
    }
}
