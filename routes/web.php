<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
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
    return redirect('login');
});
// Rota para pessoas nao logadas
Route::get('/home', [PerfilController::class, 'home'])->middleware(['auth']);
// Rota para controlar feed
Route::get('/feed'),[FeedController::class,] 'feed'])->middleware(['auth']);
//Rota para controle do explorar
Route::get('/explore'),[ExploreController::class,] 'explore'])->middleware(['auth']);
// Rota para controle da biblioteca
Route::get('/library'),[LibraryController::class,] 'library'])->middleware(['auth']
);
// Rota para o controle do match
Route::get('/match'),[MatchController::class,] 'match'])->middleware(['auth']);
// Rota para o controle de pessoas logadas
Route::get('/perfil'),[PerfilController::class,] 'perfil'])->middleware(['auth']);
require __DIR__.'/auth.php';