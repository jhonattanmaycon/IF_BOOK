<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){

        $countUsers = DB::table('users')->count();
        $countBooks = DB::table('books')->count();
        $countPosts = DB::table('posts')->count();

        return view('admin.index',['countUsers' => $countUsers],['countBooks' => $countBooks],['countPosts' => $countPosts]);
    }

    public function show_users(){

    	$showUsers = DB::table('users')->get();

    	return view('admin.showUsers', ['showUsers' => $showUsers]);

    }
    public function show_books(){

        $showBooks= DB::table('books')->get();

        return view('admin.showBooks', ['showBooks' => $showBooks]);

    }

    public function show_posts(){

        $showPosts= DB::table('posts')->get();

        return view('admin.showPosts', ['showPosts' => $showPosts]);

    }
}
