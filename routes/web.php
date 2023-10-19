<?php

use App\Http\Controllers\moduleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * 
 * All routes for modules should be here
 * prefixed at "/module/..."
 */
Route::prefix('module')->group(function () {

    Route::get('/core', [moduleController::class, 'showCore'])->name('core');

    Route::get('/job', [moduleController::class, 'showJob'])->name('job');
    
    Route::get('/leadership', [moduleController::class, 'showLeadership'])->name('leadership');
});
require __DIR__.'/auth.php';
