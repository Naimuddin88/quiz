<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Quiz;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all(); // Fetch all questions
        return view('questions.index', compact('questions'));
    }
   
    public function store(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'quiz_id' => 'required|exists:quizzes,id',
        'question' => 'required|string',
        'agree_response' => 'required|string',
        'disagree_response' => 'required|string',
    ]);

    // Create a new question using Eloquent ORM
    $question = new Question();
    $question->quiz_id = $validatedData['quiz_id'];
    $question->question = $validatedData['question'];
    $question->agree_response = $validatedData['agree_response'];
    $question->disagree_response = $validatedData['disagree_response'];
    $question->save();

    // Redirect or do something else after saving
    return redirect()->route('quizzes.index');
}
public function showQuestion($id)
    {
        // Ensure that the Question model has a relationship with options defined
        $question = Question::with('options')->find($id);

        // Check if question exists
        if (!$question) {
            return redirect()->back()->with('error', 'Question not found');
        }

        // Pass question data to the view
        return view('questions', compact('question'));
    }
}
