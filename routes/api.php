<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
// Rute untuk mengupdate profil pengguna berdasarkan ID
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
// Rute untuk menghapus profil pengguna berdasarkan ID
Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/api/profile/{id}', [ProfileController::class, 'show'])->name('profile.api.show');