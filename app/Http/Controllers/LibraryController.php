<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\{
	User,
	Book,
};

class LibraryController extends Controller
{
     public function library(User $user) {

    	return view('templates.library',[ 'user'=> $user]);   

    }

     public function getbook() {
     	 $book = Book::all();
     	return view('templates.getbook', ['book' => $book]);
     }
}
