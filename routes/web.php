<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{

	PerfilController,
	FeedController,
	ExploreController,
	LibraryController,
	MatchController,
	HomeController,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichPl
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});
// Rota para pessoas nao logadas
Route::get('/home', [HomeController::class, 'home']);
// Rota para controlar feed
Route::get('/feed', [FeedController::class, 'feed'])->middleware(['auth'])->name('feed');
//Rota para controle do explorar
Route::get('/explore',[ExploreController::class, 'explore'])->middleware(['auth'])->name('explore');
// Rota para controle da biblioteca
Route::get('/library',[LibraryController::class,'library'])->middleware(['auth']
)->name('library');
// Rota para o controle do match
Route::get('/match',[MatchController::class,'match'])->middleware(['auth'])->name('match');
// Rota para o controle de pessoas logadas
Route::get('/perfil',[PerfilController::class,'perfil'])->middleware(['auth'])->name('perfil');
require __DIR__.'/auth.php';