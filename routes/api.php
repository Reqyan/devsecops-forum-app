<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('profile')->group(function () {
    Route::post('/', [ProfileController::class, 'store'])->name('profile.store');
    // Rute untuk mengupdate profil pengguna berdasarkan ID
    Route::put('/', [ProfileController::class, 'update'])->name('profile.update');
    // Rute untuk menghapus profil pengguna berdasarkan ID
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [ProfileController::class, 'show'])->name('profile.api.show');
});