<?php

use App\Http\Controllers\Client\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('settings', [ProfileController::class, 'settings'])->name('settings');
    Route::put('settings', [ProfileController::class, 'updateSettings'])->name('settings.update');
    Route::get('documents', [ProfileController::class, 'documents'])->name('documents');
});
