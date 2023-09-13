<?php

use App\Http\Controllers\HajiDataController;
use App\Http\Controllers\HajiGroupsDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DefaulterDataController;

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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('HajiData', HajiDataController::class)->middleware('auth');
Route::resource('HajiGroupsData', HajiGroupsDataController::class)->middleware('auth');
Route::resource('DefaulterData', DefaulterDataController::class)->middleware('auth');
Route::resource('HajiAccountData', HajiAccountDataController::class)->middleware('auth');
Route::resource('HajiJointAccountData', HajiJointAccountDataController::class)->middleware('auth');
Route::resource('HajiChequeData', HajiChequeDataController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
