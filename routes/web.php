<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SGIController;
use App\Models\SGI;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/logouts', function (Request $request) {

    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
})->name('logouts');

Route::get('/dashboard', function () {

$stata = SGI::where('company_name', 'STATA')->latest()->value('id');
$statait = SGI::where('company_name', 'STATA IT')->latest()->value('id');
$stf = SGI::where('company_name', 'STF')->latest()->value('id');
$aarsl = SGI::where('company_name', 'AARSL')->latest()->value('id');

$stata = SGI::find($stata);
$statait = SGI::find($statait);
$stf = SGI::find($stf);
$aarsl = SGI::find($aarsl);

    return view('index', compact('stata','statait','stf','aarsl'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dataentry', [SGIController::class, 'FormAdd'])->name('dataentry.add');

Route::post('/dataentry/store', [SGIController::class, 'Formstore'])->name('dataentry.store');

Route::get('/dataentry/manage', [SGIController::class, 'Formmanage'])->name('dataentry.manage');

Route::get('/dataentry/view/{id}', [SGIController::class, 'Formview'])->name('dataentry.view');

require __DIR__.'/auth.php';
