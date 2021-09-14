<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Book;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $data = $request->all();

        $post->message = $request->post('message');

        $post->obra = $request->post('obra');

        $post->categoria = $request->post('categoria');

        $post->user_id = Auth::user()->id;

        $nameFile = time() . Auth::user()->id .".". $request->image->extension();

        $request->image->storeAs('imgposts', $nameFile);
        
        $post->image = $nameFile;           
        
        $post->save();



       return redirect()->route('perfil.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
      return redirect()->route('perfil.home');
    }

    public function view($id){
        $post = Post::find($id);
        $user = DB::table('users')->where(['id'=>$post->user_id])->get();
        $obra = DB::table('books')->where(['id'=>$post->obra])->OrderBy('created_at', 'ASC')->get();
        $comments = DB::table('comments')->join('users', 'users.id', '=', 'comments.user_id')->where(['post_id'=>$id])->OrderBy('comments.created_at', 'ASC')->get();
        $relacionados = DB::table('books')->where(['id'=>$post->obra])->OrderBy('created_at', 'ASC')->get();

        $likes = DB::table('likes')->where(['post_id'=>$id])->count();

        return view('templates.postview', ['post'=>$post, 'comments'=>$comments, 'relacionados'=>$relacionados, 'obra'=>$obra,  'user'=>$user, 'likes'=>$likes]);
        
    }

    public function FiltroPubli(Request $request){
        $posts = Post::where('message', 'LIKE', "%{$request->filter}%")
        ->paginate(); 

        return view('templates.feed', compact('posts'));
    }
}
