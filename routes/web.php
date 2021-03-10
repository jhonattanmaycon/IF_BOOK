<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
	PerfilController,
	FeedController,
	ExploreController,
	LibraryController,
	MatchController,
	HomeController,
	LivroController,
	
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
Route::get('/', function() {
	$user = Auth::user();	
    return redirect()->route('feed');
})->middleware(['auth']);

Route::get('/perfil', [PerfilController::class, 'perfil'])
	->middleware(['auth'])	
	->name('perfil.home');

// Rota para controlar feed
Route::get('/feed', [FeedController::class, 'feed'])
	->middleware(['auth'])
	->name('feed');

//Rota para controle do explorar
Route::get('/explore',[ExploreController::class, 'explore'])
	->middleware(['auth'])
	->name('explore');

// Rota para controle da biblioteca
Route::get('/library/{user}',[LibraryController::class,'library'])
	->middleware(['auth'])
	->name('library');

Route::get('/library_get', [LibraryController::class,'getbook']) 
	->name('getbook');

Route::get('/library_add/{book}', [LibraryController::class,'addbook']) 
	->name('addbook');

Route::get('/library_remove/{book}', [LibraryController::class,'remove']) 
	->name('remove');

Route::get('/library_paraler/{book}', [LibraryController::class,'paraLer']) 
	->name('paraLer');

Route::get('/library_jalido/{book}', [LibraryController::class,'jaLido']) 
	->name('jaLido');

Route::get('/library_parafav/{book}', [LibraryController::class,'paraFav']) 
	->name('paraFav');

Route::get('/library_removeToRead/{book}', [LibraryController::class,'removeToRead']) 
	->name('removeToRead');

Route::get('/library_removeRead/{book}', [LibraryController::class,'removeRead']) 
	->name('removeRead');

Route::get('/library_removeFav/{book}', [LibraryController::class,'removeFav']) 
	->name('removeFav');



// Rota para o controle do match
Route::get('/match',[MatchController::class,'match'])
	->middleware(['auth'])
	->name('match');

Route::get('/perfil/{id}/edit', [PerfilController::class, 'edit'] 
)->middleware(['auth'])
	->name('perfil.edit');

	Route::put('/update/{id}', [PerfilController::class, 'update']
)->middleware(['auth'])
	->name('perfil.update');

Route::resource('livros', LivroController::class);

require __DIR__.'/auth.php';