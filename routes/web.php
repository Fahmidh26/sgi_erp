<?php

use App\Http\Controllers\SGIController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::view('/', 'login');

Route::get('/', function () {

    return view('auth.login');
})->name('p');

Route::view('dashboard', 'index')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/logout', function () {
    Auth::logout();

    // You can redirect to any route after logout
    return redirect('/');
})->name('logout');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/dataentry', [SGIController::class, 'FormView'])->name('dataentry.add');

Route::post('/dataentry/store', [SGIController::class, 'Formstore'])->name('dataentry.store');

Route::get('/dataentry/manage', [SGIController::class, 'Formmanage'])->name('dataentry.manage');

require __DIR__.'/auth.php';
