<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('index');
Route::get('/detail-posts/{id}', [PostController::class, 'detail'])->name('detail-posts');
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
Route::get('/edit-post/{id}', [PostController::class, 'edit'])->name('edit-post');
Route::put('/update/{id}', [PostController::class, 'update'])->name('update-post');
Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete-post');


