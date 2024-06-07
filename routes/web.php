<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/table', function () {
    return view('user.table');
})->middleware(['auth', 'verified'])->name('table');



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

// Route::get('edit/{id}', [FormController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('/users', [UserController::class, 'index'])->name('user.index');


Route::get('/users', [FormController::class, 'index'])->name('user.index');
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');




// Route::put('update-data/{id}', [FormController::class,'update']);
Route::put('/update-data/{id}', [FormController::class, 'update'])->name('update-data');

Route::get('delete/{id}', [FormController::class, 'remove']);

// Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
// Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
// Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
// Route::post('/quizzes/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');

Route::resource('quizzes', QuizController::class);

require __DIR__.'/auth.php';
