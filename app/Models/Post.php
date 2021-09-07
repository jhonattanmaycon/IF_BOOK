<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public function contlike($post){
        $has = DB::table('likes')->where(['post_id'=>$post])->count();
      
        return $has;
    }

    public function contcomment($post){
        $has = DB::table('comments')->where(['post_id'=>$post])->count();
      
        return $has;
    }
}
