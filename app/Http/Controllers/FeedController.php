<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

class FeedController extends Controller
{
    public function feed() {
    	 $dados = Auth::user();
    	 return view('templates.feed', ['user'=>$dados]);
    }
}
