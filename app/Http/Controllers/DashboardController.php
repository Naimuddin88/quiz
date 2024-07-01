<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all(); // Fetch all quizzes
        return view('dashboard', compact('quizzes'));
    }
}
