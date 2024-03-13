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

Route::get('/', function () {
    return view('welcome');
});

//Index Route
Route::get('posts', [PostController::class, 'index'])->name('posts.index');


//Create Route
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

//Show Route
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

//Edit Route
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

//Store Route
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

//Update Route
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

//Delete Route
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::fallback(function () {
    return view('notfound');
});
