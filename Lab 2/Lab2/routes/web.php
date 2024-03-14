<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as PostController;

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
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

//Trash Route
Route::get('posts/trash', [PostController::class, 'view_trash'])->name('posts.trash');

//Show Route
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

//Edit Route
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');



//Delete Route
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



//Fallback Route
Route::fallback(function () {
    return 'Page Not Found';
});
?>
