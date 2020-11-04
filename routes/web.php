<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FileManagerController;


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
Route::get('/news/{page}', [NewsController::class, 'composeNewsPage']);
Route::get('/news/article/{id}',[NewsController::class,'composeArticle']);


Route::get('/admin', [NewsController::class, 'adminView'])->middleware('admin.control');
Route::get('/admin/edit/article/{id}', [NewsController::class, 'editNewsView'])->middleware('admin.control');
Route::post('/admin/preview', [NewsController::class, 'showPreview'])->middleware('admin.control');
Route::post('/admin/updated', [NewsController::class, 'updateArticle'])->middleware('admin.control');

Route::get('/admin/create/article', [NewsController::class, 'showCreate'])->middleware('admin.control');
Route::get('/admin/upload', [FileManagerController::class, 'show'])->middleware('admin.control');


Route::post('/admin/created', [NewsController::class, 'createArticle'])->middleware('admin.control');
Route::post('/admin/delete', [NewsController::class, 'deleteArticle'])->middleware('admin.control');
Route::post('/admin/imageupload', [FileManagerController::class, 'onUpload'])->middleware('admin.control');


Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'onLogin']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/email/verify', function () {
    return view('verify-email');
    
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $req){
    $req->fulfill();
    return redirect('/')->with('status','Logeado con exito');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/reverify', function (Request $req) {
    $req->user()->sendEmailVerificationNotification();

    return back()->with('status', 'Se ha enviado con exito');
    
})->middleware(['auth','throttle:6,1'])->name('verification.send');
