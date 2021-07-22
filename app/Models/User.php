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

    public function exist($book_id){

        $has = $this->books()->where(['book_id'=> $book_id,  'has'=>1])->count();

        return $has > 0 ? true : false;
    }

    public function hasBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'has'=>1])->count();

        return $has > 0 ? true : false;
    }
 
    public function toReadBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'toRead'=>1])->count();
       //$has = $this->books()->where('book_id',$book_id)->count();
        return $has > 0 ? true : false;
    }

    public function readBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'read'=>1])->count();
       //$has = $this->books()->where('book_id',$book_id)->count();
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

    public function isFollowerBy($id){
         $has = DB::table('users_followers')->where(['follower'=> $id, 'followed' => $this->id])->count();
          return $has;
    }



   


}
