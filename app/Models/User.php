<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

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
        $has = $this->books()->where('book_id',$book_id)->count();
        return $has > 0 ? true : false;
    }

    public function hasBook($book_id){
        $has = DB::table('users_books')->where(['book_id'=>$book_id, 'has'=>1])->count();
       //$has = $this->books()->where('book_id',$book_id)->count();
        return $has > 0 ? true : false;
    }


}
