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

	public function __construct(){
		$this->middleware(['auth']);
	}



	public function library(User $user){
		
		$books = $user->books;

		return view('templates.library', ['user' => $user, 'books' => $books]);
	}

	public function getbook(){
		$book = Book::all();
		return view('templates.getbook', ['book' => $book]);
	}



	public function addbook(Book $book){

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

		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['has' =>0, 'read'=>0, 'toRead'=>0]);

		return redirect()->route('library', ['user' => Auth::user()->id]);
	
	}

	public function paraLer(Book $book){

		$validate = DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id(), 'read' =>0])->count();

		if ($validate) {
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>1]);
		}

		else{
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>1]);
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>0]);
		}
	

		return redirect()->route('library', ['user' => Auth::user()->id]);
	
	}

	public function jaLido(Book $book){

		$validate = DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id(), 'toRead' =>0])->count();

		if ($validate) {
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>1]);
		}
		else{
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>0]);
			DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>1]);
		}
	
	
		return redirect()->route('library', ['user' => Auth::user()->id]);
	
	}


	public function paraFav(Book $book){
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['rating' =>1]);
 		//alterar a variavel rating para fav
		return redirect()->route('library', ['user' => Auth::user()->id]);
	
	}

	public function removeToRead(Book $book){
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['toRead' =>0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function removeRead(Book $book){
		DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['read' =>0]);
		return redirect()->route('library', ['user' => Auth::user()->id]);
	}

	public function removeFav(Book $book){
		//DB::table('users_books')->where(['book_id' => $book->id, 'user_id'=>Auth::id()])->update(['fav' =>0]);
		 //alterar a variavel rating para fav
		 return redirect()->route('library', ['user' => Auth::user()->id]);

	}


	public function book_filter(Request $request)
	{
		$book = Book::where('title', 'LIKE', "%{$request->filter}%")
		->orWhere('author', 'LIKE', "%{$request->filter}%")
		->orWhere('genre', 'LIKE', "%{$request->filter}%")
		->orWhere('year', 'LIKE', "%{$request->filter}%")

		->get();

		
        

        return view('templates.getbook', compact('book'));
	}
}
