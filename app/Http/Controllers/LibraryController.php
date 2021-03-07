<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

use App\Models\{
	User,
	Book,
};
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LibraryController extends Controller
{
     public function library(User $user) {
		$bookuser = DB::table('users_books')->where('user', Auth::user()->id)->get();

		$Lista = $user->books;


		$book = Book::all(); //falta a condição

     	$books = $user->books;

    	return view('templates.library',[ 'user'=> $user, 'books'=> $books]);   

    }

     public function getbook() {
     	 $book = Book::all();
     	return view('templates.getbook', ['book' => $book]);
     }

	

	 public function addbook(User $user, Book $livro){
		return "oi {{$user}}";
	 }
}
