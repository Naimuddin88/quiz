<?php

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
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Routes accessible only to users with 'admin' role
});

Route::middleware(['auth', 'role:user'])->group(function () {
    // Routes accessible only to users with 'user' role
});
require __DIR__.'/auth.php';
