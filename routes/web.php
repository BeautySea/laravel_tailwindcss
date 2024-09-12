<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\IntakeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

// Route::view('dashboard', 'Patient/index')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::view('test', 'test')
    ->middleware(['auth', 'verified'])
    ->name('test');
Route::get('dashboard', [PatientController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    
Route::resource('patients', PatientController::class);
Route::resource('intakes', IntakeController::class);

require __DIR__.'/auth.php';
