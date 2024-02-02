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

Route::get('/dataentry', [SGIController::class, 'FormAdd'])->name('dataentry.add');

Route::post('/dataentry/store', [SGIController::class, 'Formstore'])->name('dataentry.store');

Route::get('/dataentry/manage', [SGIController::class, 'Formmanage'])->name('dataentry.manage');

Route::get('/dataentry/view/{id}', [SGIController::class, 'Formview'])->name('dataentry.view');

require __DIR__.'/auth.php';
