<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;


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

