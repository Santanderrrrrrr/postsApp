<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PosterController;


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
    return view('welcome');
});
// Route::get('/makead', function () {
//     return view('makead');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');


// Routes to blade pages
// routes for the home buttons and buttons to different blades
Route::get('/index', [App\Http\Controllers\BladeController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\BladeController::class, 'create'])->name('create');


//New Routes
// Route::post('/posts', [PosterController::class, 'store']);
// Route::get('/posts', [PosterController::class, 'get']);
// Route::post('/posts/{id}', [PosterController::class, 'delete']);
