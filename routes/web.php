<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// ADMIN AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);

// ADMIN PAGE
Route::group(['middleware'=>['auth']], function(){
  Route::get('/', [HomeController::class, 'index']);

});
