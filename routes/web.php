<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes - TOURBAIK Travel Haji & Umrah
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kebijakan-privasi', [HomeController::class, 'privacy'])->name('privacy');
Route::post('/konsultasi', [HomeController::class, 'consultation'])->name('consultation');
