<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function home() {
    	$dados = Auth::user();
    	return view('templates.home', ['user'=>$dados]);
    }
}
