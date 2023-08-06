<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Auth::routes();

Route::get('/posts',[PostController::class,'index'])->middleware('auth');
Route::get('/posts/create',[PostController::class,'create'])->middleware('auth');
Route::post('/posts',[PostController::class,'store'])->middleware('auth');
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->where('id', '[0-9]+')->middleware('auth');
Route::patch('/posts/{id}/update',[PostController::class,'update'])->where('id', '[0-9]+')->middleware('auth');
Route::delete('/posts/{id}',[PostController::class,'destroy'])->where('id', '[0-9]+')->middleware('auth');
Route::get('/posts/{id}', [PostController::class, 'show'])->where('id', '[0-9]+')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
