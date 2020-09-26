<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('index');
});

Route::get('/news', function(){
    return redirect('news/0');
});
Route::get('/news/{page}', [NewsController::class, 'composeView']);
Route::get('/news/article/{id}',[NewsController::class,'composeArticle']);

Route::get('/admin', [NewsController::class, 'adminView'])->middleware('admin.control');
Route::get('/admin/edit/article/{id}', [NewsController::class, 'editNewsView'])->middleware('admin.control');


Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'onLogin']);
Route::get('/logout', [LoginController::class,'logout']);

