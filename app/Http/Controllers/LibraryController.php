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

	public function __construct()
	{
		$this->middleware(['auth']);
	}



	public function library(User $user)
	{
		
		$books = $user->books;
		return view('templates.library', ['user' => $user, 'books' => $books]);
	}

	public function getbook()
	{
		$book = Book::all();
		return view('templates.getbook', ['book' => $book]);
	}



	public function addbook(Book $book)
	{

		$validate = Auth::user()->books()->where('book_id', $book->id)->count();
		if (!$validate) {
			DB::table('users_books')->insert([
				'user_id' => Auth::user()->id,
				'book_id' => $book->id,
				'has' => 1,
				'reading' => 0,
				'read' => 0,
				'left' => 0,
				'toRead' => 0,
				'rating' => 1
			]);
			return redirect()->route('library', ['user' => Auth::user()->id]);
		} 
		else {
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['has' =>1]);
			return redirect()->route('library', ['user' => Auth::user()->id]);
		}
		
	}


	public function remove(Book $book){

		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['has' =>0]);

		return redirect()->route('library', ['user' => Auth::user()->id]);
	
	}

	public function toRead(Book $book) {

		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>1]);

		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function remove_toRead(Book $book) {
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function read(Book $book) {
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>1]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function remove_read(Book $book){
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function reading(Book $book) {
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['reading' =>1]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}
	public function remove_reading(Book $book) {
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['reading' =>0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function rating(Book $book){
		return view('rating', ['book'=>$book]);
	}

	public function update_rating(Book $book, Request $request){

		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['rating' => $request->rating]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function favorito(Book $book) {
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['left' => 1]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function remove_favorito(Book $book){
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['left' => 0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}



}
