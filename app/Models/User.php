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

    public function books()
    {
        return $this->belongsToMany(Book::class, 'users_books', 'user_id', 'book_id');
    }

    public function exist($book_id){
        $has = $this->books()->where(['book_id'=>$book_id, 'has'=>1])->count();
        return $has > 0 ? true : false;
    }

    public function hasBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'has'=>1])->count();
        return $has > 0 ? true : false;
    }
    public function toRead($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'toRead'=>1])->count();
        return $has > 0 ? true : false;
    }
    public function read($book_id){
         $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'read'=>1])->count();
        return $has > 0 ? true : false;
    }
    public function reading($book_id){
         $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'reading'=>1])->count();
        return $has > 0 ? true : false;
    }

    public function favorito($book_id){
          $has = DB::table('users_books')->where(['book_id'=>$book_id, 'user_id'=> Auth::user()->id, 'left'=>1])->count();
        return $has > 0 ? true : false;
    }






    // CONTAGENS
    

    public function countBooks(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id,'has'=>1])->count();
        return $has;
    }
     public function countToRead(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'toRead'=>1])->count();
        return $has;
    }
     public function countRead(){
        $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'read'=>1])->count();
        return $has;
    }
    public function countReading(){
       $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'reading'=>1])->count();
        return $has;
    }


    public function countRating(){
       $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id])->get('rating');

       
        return $has;
    }
    public function countFavorito(){
       $has = DB::table('users_books')->where(['user_id'=> Auth::user()->id, 'left'=>1])->count();
        return $has;
    }
    




}
