<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user', function () {
//     return view('profile.user');
// })->middleware(['auth', 'verified'])->name('user');

Route::get('/table', function () {
    return view('user.table');
})->middleware(['auth', 'verified'])->name('table');

// Route::get('/billing', function () {
//     return view('profile.billing');
// })->middleware(['auth', 'verified'])->name('billing');


// Route::get('/virtual-reality', function () {
//     return view('profile.virtual-reality');
// })->middleware(['auth', 'verified'])->name('virtual-reality');

Route::middleware('auth')->group(function () {
});

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('user', [ProfileController::class,'index']);
// });
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('user', [ProfileController::class, 'index'])->name('user');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    // Routes accessible only to users with 'user' role
});



Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

Route::get('edit/{id}', [FormController::class, 'edit']);

// Route::put('update-data/{id}', [FormController::class,'update']);
Route::put('/update-data/{id}', [FormController::class, 'update'])->name('update-data');

Route::get('delete/{id}', [FormController::class, 'remove']);

Route::resource('users', FormController::class);


Route::get('forgot-password', [FormController::class, 'create']);

require __DIR__.'/auth.php';
