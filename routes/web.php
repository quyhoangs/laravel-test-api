<?php

use App\Http\Controllers\ArticleController;

// use ArticleController
use App\Http\Controllers\JobInfoController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//ArticleController  /update
// Route::put('/articles/{articleId}', 'ArticleController@update');
Route::get('/articles/{articleId}', [ArticleController::class, 'update']);

Route::get('/test', [JobInfoController::class, 'index']);
