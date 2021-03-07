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

     	$books = $user->books;

    	return view('templates.library',[ 'user'=> $user, 'books'=> $books]);   

    }

     public function getbook() {
     	 $book = Book::all();
     	return view('templates.getbook', ['book' => $book]);
     }
}
