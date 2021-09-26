<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeboController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::resource('/abouts', AboutController::class);
Route::resource('/chefs', ChefController::class)->middleware(['auth', 'admin'], ['auth', 'webmaster']);
Route::resource('/commentaires', CommentaireController::class)->middleware(['auth', 'admin'], ['auth', 'webmaster'], ['auth', 'editeur']);
Route::resource('/homebos', HomeboController::class)->middleware(['auth', 'admin'], ['auth', 'webmaster'], ['auth', 'editeur']);
Route::resource('/users', UserController::class)->middleware(['auth', 'admin']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
