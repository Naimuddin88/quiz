<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Fetch the quizzes or any other data you want to display on the user's dashboard
        $quizzes = Quiz::all();

        // Pass the data to the user dashboard view
        return view('dashboard', compact('quizzes'));
    }
}
