<?php

use App\Http\Controllers\ProfileController;
use \App\Http\Controllers\Api\PatientApiController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PatientController;


Route::get('/', function () {
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
  return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->
  //  name('dashboard');
Route::get('/patients/create', [PatientController::class, 'create'])->middleware(['auth', 'verified'])->name('patients.create');
Route::post('/patients/store', [PatientController::class, 'store'])->middleware(['auth', 'verified'])->name('patients.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/patients2', [PatientApiController::class, 'index'])->name('patients.api');

//Route::get('/patients2', [\App\Http\Controllers\Api\PatientApiController::class, 'index']);


require __DIR__.'/auth.php';
