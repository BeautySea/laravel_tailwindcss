<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\IntakeController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\BillController;
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
Route::resource('visits', VisitController::class);
Route::resource('bills', BillController::class);

Route::post('/create_patient_next', [PatientController::class, 'store_and_next']);
Route::post('/create_intake_next', [IntakeController::class, 'store_and_next']);
Route::post('/create_visit_next', [VisitController::class, 'store_and_next']);
Route::post('/create_bill_next', [BillController::class, 'store_and_next']);

require __DIR__.'/auth.php';
