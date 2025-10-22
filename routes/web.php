<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('volontaire.index');
});

// Autres pages
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/calendar', [FrontController::class, 'calendar'])->name('calendar');
Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
Route::get('/documents', [FrontController::class, 'documents'])->name('documents');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');
Route::get('/messages', [FrontController::class, 'messages'])->name('messages');
Route::get('/missions', [FrontController::class, 'missions'])->name('missions');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
Route::get('/register', [FrontController::class, 'register'])->name('register');
