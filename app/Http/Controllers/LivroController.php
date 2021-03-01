<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book.index', ['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $livro = new Book();
        $data = $request->all();

        $livro->title = $request->post('title');
        $livro->author = $request->post('author');
        $livro->synopsis = $request->post('synopsis');
        $livro->genre = $request->post('genre');
        $livro->age = $request->post('age');
        $livro->year = $request->post('year');

        $nameFile = Str::camel($livro->title).".". $request->cover->extension();

        $request->cover->storeAs('imgcapas', $nameFile);

        // $url = Storage::url('/public/imgcapas/'. $nameFile);
        

        $livro->cover = $nameFile;           
        
        $livro->save();

        return redirect()->route('livros.index', ['book'=>$livro]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Book::find($id);

        if($livro) {
            return view('book.show', ['book'=>$livro]);
        }
        return redirect()->route('livros.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Book::find($id);
        if($livro) {
            return view('book.edit' , ['book'=>$livro]);
        } 
        return redirect()->route('livros.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livro = Book::find($id);

       $data = $request->all();

       $livro->title = $data['title'];
       $livro->author = $data['author'];
       $livro->genre = $data['genre'];
       $livro->year = $data['year'];
       $livro->age = $data['age'];
       $livro->synopsis = $data['synopsis'];
       $livro->save();
       return view('book.show' , ['book'=>$livro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Book::find($id);
        $livro->delete();
      return redirect()->route('livros.index');
    }
}
