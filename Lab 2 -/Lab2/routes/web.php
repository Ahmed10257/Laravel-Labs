<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as PostController;
use App\Http\Middleware\CheckPostOwner as CheckPostOwner;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Index Route
Route::get('posts', [PostController::class, 'index'])->name('posts.index');

//Create Route
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');

//Store Route
Route::post('posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');

//Trash Route
Route::get('posts/trash', [PostController::class, 'view_trash'])->name('posts.trash');

//Show Route
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

//Edit Route
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware(CheckPostOwner::class);

//Update Route
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

//Delete Route
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware(CheckPostOwner::class);

//Users Route
Route::get('users', [PostController::class, 'show_users'])->name('posts_users');


//Fallback Route
Route::fallback(function () {
return 'Page Not Found';
});
