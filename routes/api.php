<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\posts;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Routes to post controllers
Route::get('/posts', [PostController::class, 'index']);
Route::prefix('/posts')->group(function(){ 
    Route::post('/store', [PostController::class, 'store']);
    Route::post('/{id}', [PostController::class, 'update']);
    Route::post('/delete/{id}', [PostController::class, 'destroy']);
});


//routes to page controllers for vue
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

