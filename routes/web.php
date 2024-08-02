<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;





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
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route::group(['middleware' => 'auth.user'], function () {
//     Route::get('/user.dashboard', 'DashboardController@index')->name('dashboard');
// });
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// User Dashboard
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
});

// Admin Dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});

// Route::get('/user', function () {
//     return view('user.layouts.index');
// })->middleware(['auth', 'verified'])->name('user');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('user', [ProfileController::class, 'index'])->name('user');
});

Route::middleware('auth')->group(function () {
    
});


Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::get('/user', [DashboardController::class, 'index'])->name('user');
//         // Other admin routes
//  });
Route::middleware(['auth', 'redirect.admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
// });

// Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');

Route::middleware(['auth', 'role:user'])->group(function () {
});

Route::get('/quiz/{quiz}/results', [QuizController::class, 'showResults'])->name('quizzes.result');
// Route::get('quiz/{quiz}/result', [QuizController::class, 'showResults'])->name('quizzes.result');


// Route::get('/quiz/{quizId}', [QuizController::class, 'show'])->name('quizzes.show');
// Route::post('/quiz/{quizId}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
Route::get('/quiz/{quizId}/result', [QuizController::class, 'result'])->name('quizzes.result');

Route::get('/quiz/{quizId}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{quizId}/submit', [QuizController::class, 'submit'])->name('quiz.submit');
Route::get('/quiz/{quizId}/result', [QuizController::class, 'result'])->name('quiz.result');



// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/user/management', 'UserManagementController@index')->name('user.management');
Route::get('/quizzes', 'QuizzesController@index')->name('quizzes.index');
Route::get('/questions', 'QuestionsController@index')->name('questions.index');
Route::get('/profile', 'ProfileController@index')->name('profile');

// Route::post('/quiz/{id}/submit', [QuizController::class, 'submitQuiz'])->name('submit.quiz');
// Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submitQuiz'])->name('submit.quiz');
// Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submitQuiz'])->name('submit.quiz');
// Route::post('/quizzes/{quizId}/submit', [QuizController::class, 'submitQuiz'])->name('quizzes.submit');

// Route::post('/submit-quiz/{quiz}', [QuizController::class, 'submitQuiz'])->name('submit.quiz');

// // Route::post('/quiz/{quizId}/submit', [QuizController::class, 'submitQuiz'])->name('quizzes.submit');
// Route::get('/quiz/{quizId}', [QuizController::class, 'show'])->name('quizzes.show');

// Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submit'])->name('quiz.submit');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
// Route::get('quizzes/create', [QuizController::class, 'createn'])->name('quizzes.new');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/u-profile', [ProfileController::class, 'show'])->name('u-profile.show');
Route::post('/u-profile/update', [ProfileController::class, 'update'])->name('u-profile.update');


// Route::get('/dashboard', [QuizController::class, 'index'])->middleware('auth');
// Route::get('/quizzes/{id}', [QuizController::class, 'show'])->middleware('auth');

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     // other admin routes
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
//     // other user routes
// });

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
Route::get('quizzes/new', [QuizController::class, 'createn'])->name('quizzes.new');


Route::get('questions/new', [QuizController::class, 'createn'])->name('questions.new');
Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/{id}', [QuestionController::class, 'showQuestion'])->name('questions.show');

Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');

Route::resource('quizzes', QuizController::class);
// Route::get('quiz/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');

// Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quizzes.show');
Route::post('/quiz/{quiz}/submit', [QuizController::class, 'submit'])->name('submit.quiz');
// Route::get('/quiz/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');
Route::get('/question/{id}', [QuestionController::class, 'showQuestion']);

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
Route::post('/quizzes/submit', [QuizController::class, 'submit'])->name('quizzes.submit');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');


Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard')->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::post('/quizzes/{id}/submit', [QuizController::class, 'submit'])->name('submit.quiz');

Route::resource('users', UserController::class);

Route::get('/users', [FormController::class, 'index'])->name('user.index');
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/users/edit/{id}', [FormController::class, 'edit'])->name('user.edit');
// Route::post('/users/update/{id}', [FormController::class, 'update'])->name('user.update');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

Route::post('/users/store', [FormController::class, 'store'])->name('user.store');
Route::delete('/users/delete/{id}', [FormController::class, 'remove'])->name('user.remove');

Route::put('/update-data/{id}', [FormController::class, 'update'])->name('update-data');
Route::get('delete/{id}', [FormController::class, 'remove']);

Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');

Route::get('/questions', 'App\Http\Controllers\QuestionController@index')->name('questions.index');

Route::get('ParentChild', 'App\Http\Controllers\CategoriesController@getCategories');

Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index'); 
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index'); 
});

require __DIR__.'/auth.php';
