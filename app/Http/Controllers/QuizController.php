<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::with('options')->get();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'question' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'options' => 'required|array|min:4',
            'options.*' => 'required|string|max:255',
            'correct_option' => 'required|integer|min:1|max:4',
        ]);
    
        $quiz = Quiz::create($request->only('name', 'question', 'status'));
    
        foreach ($request->options as $key => $option) {
            $quiz->options()->create([
                'option_text' => $option,
                'is_correct' => $key == $request->correct_option - 1,
            ]);
        }
    
        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }
}

