<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class ExploreController extends Controller
{
     public function explore() {
    	 $dados = DB::table('posts')->OrderBy('created_at', 'DESC')->get();

    	//return view('templates.explore', ['dados'=>$dados, 'dadosuser'=>$dadosuser]);
        return view('templates.explore', ['dados'=>$dados]);
    }
}
