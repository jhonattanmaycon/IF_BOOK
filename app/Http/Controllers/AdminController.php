<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){

        $countUsers = DB::table('users')->count();

    	return view('admin.index', ['countUsers' => $countUsers]);
    }

    public function show_users(){

    	$showUsers = DB::table('users')->get();

    	return view('admin.showUsers', $showUsers);

    }
}
