<?php

use App\Http\Controllers\SGIController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'index')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/dataentry', [SGIController::class, 'FormView'])->name('dataentry.add');

require __DIR__.'/auth.php';
