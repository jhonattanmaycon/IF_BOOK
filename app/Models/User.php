<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'city',
        'years',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books(){
        return $this->belongsToMany(Book::class, 'users_books', 'user_id', 'book_id');
    }

    public function amigos(){
        return $this->belongsToMany(User::class, 'user_follow_user', 'user_1', 'user_2');
    }

    public function contsegue($user){
        $has = DB::table('user_follow_user')->where(['user_2'=> $user->id])->count();
        return $has;
    }
    public function contseguindo($user){
        $has = DB::table('user_follow_user')->where(['user_1'=> $user->id])->count();
        return $has;
    }

    //função para obter seguidores
    public function meus_seguidores () {
        $list = DB::table ('user_follow_user')->join ('users', 'users.id', '=', 'user_follow_user.user_1')
            ->where(['user_2' => $this->id])
            ->get();
       
        return $list;
    }
    public function meus_seguindos () {
        $list = DB::table ('user_follow_user')->join ('users', 'users.id', '=', 'user_follow_user.user_2')
            ->where(['user_1' => $this->id])
            ->get();
       
        return $list;
    }

    public function exist($book_id){

        $has = $this->books()->where(['book_id'=> $book_id,  'has'=>1])->count();

        return $has > 0 ? true : false;
    }

    public function hasBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'has'=>1])->count();

        return $has > 0 ? true : false;
    }
 
    public function toReadBook($book_id){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id,'book_id'=>$book_id, 'toRead'=>1])->count();
        //precisa do Auth ué
       //$has = $this->books()->where('book_id',$book_id)->count();
        return $has > 0 ? true : false;
    }

    public function readBook($book_id){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'book_id'=>$book_id, 'read'=>1])->count();
       //precisa do Auth
        return $has > 0 ? true : false;
    }

    public function favBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'rating'=>1])->count();
       //alterar a variavel rating para fav
        return $has > 0 ? true : false;
    }

    public function contHas(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'has' =>1])->count();
      
        return $has;
    }

    public function contRead(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id,'read'=>1])->count();
      
        return $has;
    }

    public function contToRead(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id,'toRead'=>1])->count();
      
        return $has;
    }

    public function contFav(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id,'rating'=>1])->count();
       //alterar a variavel rating para fav
        return $has;
    }
    // função para mostrar o feed do usuario
    public function carregar_feed () {
        $list = DB::table ('user_follow_user')
            ->join ('users', 'users.id', '=', 'user_follow_user.user_2')
            ->join ('posts', 'posts.user_id', '=', 'user_follow_user.user_2')
            ->where(['user_1' => $this->id])
            ->select('posts.id','message','likes', 'obra','posts.created_at','posts.views', 'users.name', 'user_follow_user.user_2')->get();
    // precisa carregar: mensagem, imagem, likes, comentarios da postagem
        return $list;
    
    }


}
