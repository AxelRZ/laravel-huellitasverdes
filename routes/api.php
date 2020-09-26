<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [NewsController::class,'index']);
Route::get('articles/{id}', [NewsController::class,'query'])->middleware("auth.api.article");
Route::get('articles/range/{start}-{end}', [NewsController::class,'queryrange'])->middleware("auth.api.article");
Route::post('articles', [NewsController::class,'save'])->middleware("auth.api.article");
Route::put('articles/{id}', [NewsController::class,'update'])->middleware("auth.api.article");
Route::delete('articles/{id}', [NewsController::class,'delete'])->middleware("auth.api.article");



