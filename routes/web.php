<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

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
<<<<<<< HEAD
// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
=======
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/table', function () {
    return view('user.table');
})->middleware(['auth', 'verified'])->name('table');

<<<<<<< HEAD
// Route::get('/users', [FormController::class, 'index'])->name('user.index');
=======
// Route::get('/nquiz', function () {
//     return view('user.nquiz');
// })->middleware(['auth', 'verified'])->name('nquiz');
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

Route::middleware('auth')->group(function () {
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('user', [ProfileController::class, 'index'])->name('user');
});

<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
Route::get('quizzes/new', [QuizController::class, 'createn'])->name('quizzes.new');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('quizzes', QuizController::class);
Route::get('quiz/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');

Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submit'])->name('submit.quiz');
Route::get('/quiz/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');
Route::get('/question/{id}', [QuestionController::class, 'showQuestion']);

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
Route::post('/quizzes/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');


Route::post('/quizzes/{id}/submit', [QuizController::class, 'submit'])->name('submit.quiz');

=======
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'role.user'])
    ->name('dashboard');
    
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
Route::middleware(['auth', 'role:user'])->group(function () {
    // Routes accessible only to users with 'user' role
});

<<<<<<< HEAD
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::get('/users', [UserController::class, 'index'])->name('user.index');
=======
// Route::get('edit/{id}', [FormController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('/users', [UserController::class, 'index'])->name('user.index');

>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

Route::get('/users', [FormController::class, 'index'])->name('user.index');
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/users/edit/{id}', [FormController::class, 'edit'])->name('user.edit');
Route::post('/users/update/{id}', [FormController::class, 'update'])->name('user.update');
Route::post('/users/store', [FormController::class, 'store'])->name('user.store');
Route::delete('/users/delete/{id}', [FormController::class, 'remove'])->name('user.remove');

<<<<<<< HEAD
=======

Route::get('quizzes/new', [QuizController::class, 'createn'])->name('quizzes.new');

Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');

// routes/web.php
// Route::post('/questions/import', [App\Http\Controllers\QuestionController::class, 'import'])->name('questions.import');
Route::get('/questions', 'App\Http\Controllers\QuestionController@index')->name('questions.index');


// Route::put('update-data/{id}', [FormController::class,'update']);
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
Route::put('/update-data/{id}', [FormController::class, 'update'])->name('update-data');
Route::get('delete/{id}', [FormController::class, 'remove']);

<<<<<<< HEAD
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');

Route::get('/questions', 'App\Http\Controllers\QuestionController@index')->name('questions.index');


Route::get('ParentChild', 'App\Http\Controllers\CategoriesController@getCategories');

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Display all users
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index'); // Display all quizzes
});
=======
// Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
// Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
// Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
// Route::post('/quizzes/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');

Route::resource('quizzes', QuizController::class);

Route::get('ParentChild', 'App\Http\Controllers\CategoriesController@getCategories');



>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

require __DIR__.'/auth.php';
