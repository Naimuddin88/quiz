<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Quiz;
=======

>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
use Illuminate\Http\Request;

class DashboardController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $quizzes = Quiz::all(); // Fetch all quizzes
        return view('dashboard', compact('quizzes'));
=======
    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('dashboard');
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
    }
}
