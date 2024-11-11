<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/profile/{id}', [ProfileController::class, 'show'])->middleware('auth');


// ADMIN AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);

// ADMIN PAGE
Route::group(['middleware'=>['auth']], function(){
  // Route::get('/', [HomeController::class, 'index']);
  Route::get('/', [PostController::class, 'index']);
  Route::get('/posts', [PostController::class, 'index'])->name('index');
  Route::get('/detail-posts/{id}', [PostController::class, 'detail'])->name('detail-posts');
  Route::post('/detail-posts/{id}', [CommentController::class, 'store'])->name('store-comment');
  Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
  Route::post('/store-post', [PostController::class, 'store'])->name('store-post');
  Route::get('/edit-post/{id}', [PostController::class, 'edit'])->name('edit-post');
  Route::put('/update/{id}', [PostController::class, 'update'])->name('update-post');
  Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete-post');
});


// Rute untuk API JSON
Route::prefix('api')->group(function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
});

// Rute untuk tampilan HTML
Route::get('/profile/{id}', function ($id) {
    return view('profile', ['id' => $id]);
})->name('profile.page');

