<?php



namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     $quizzes = Quiz::all(); // Fetch all quizzes from the database
    //     // dd($quizzes); // Dump the quizzes to check if they are being fetched
    //     return view('dashboard', compact('quizzes'));
    // }
    // public function index()
    // {
    //     $quizzes = Quiz::all(); // Fetch all quizzes from the database
    //     return view('dashboard', compact('quizzes'));
    // }
    // public function index()
    // {
    //     return view('dashboard');
    // }


  public function index()
    {
        $quizzes = Quiz::all(); // Fetch all quizzes from the database
        return view('dashboard', compact('quizzes'));
    }



    public function userDashboard()
    {
        return view('dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

}
