<?php

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
    // return view('welcome');
    return redirect('home');
});

Auth::routes(['register' => false, 'reset' => false]);




Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::post('user', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('/kyc', [App\Http\Controllers\FHIRController::class, 'kyc'])->name('kyc');
    Route::get('/kyc_url', [App\Http\Controllers\FHIRController::class, 'kyc_url'])->name('kyc_url');
    Route::get('/token', [App\Http\Controllers\FHIRController::class, 'token'])->name('token');
    Route::get('/encounter', [App\Http\Controllers\FHIRController::class, 'encounter'])->name('encounter');
    Route::get('/condition', [App\Http\Controllers\FHIRController::class, 'condition'])->name('condition');
});
