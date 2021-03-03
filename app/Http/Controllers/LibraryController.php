<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class LibraryController extends Controller
{
     public function library(User $user) {
    	return view('templates.library');
    }
}
