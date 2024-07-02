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
        $questions = Question::all(); // Fetch all questions (adjust as per your logic)
        return view('questions.index', compact('questions'));
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'quiz_id' => 'required|exists:quizzes,id',
    //         'question' => 'required|string|max:255',
    //         'options' => 'required|array|min:4|max:4',
    //         'options.*' => 'required|string|max:255',
    //     ]);

    //     $question = Question::create([
    //         'quiz_id' => $request->quiz_id,
    //         'question' => $request->question,
    //     ]);

    //     foreach ($request->options as $index => $optionText) {
    //         Option::create([
    //             'question_id' => $question->id,
    //             'option' => $optionText,
    //             'is_correct' => $index == $request->correct_option, // Adjust this as needed
    //         ]);
    //     }

    //     return redirect()->back()->with('success', 'Question created successfully!');
    // }

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
<<<<<<< HEAD
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
=======
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
}
