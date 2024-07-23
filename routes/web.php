<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'show']);
Route::get('/home',[PostController::class,'home'])->name('home');
Route::post('/submit',[PostController::class,'store']);
Route::get('/submit/view',[PostController::class,'index']);
Route::get('submit/edit/{id}',[PostController::class,'edit']);
Route::get('submit/delete/{id}',[PostController::class,'destroy']);
Route::post('update/{id}',[PostController::class,'update']);
Route::get('blog-post',[PostController::class,'show']);

