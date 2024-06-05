<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        // This will return a collection of questions including their answers.
        $questionsCollection = Question::all();
        return view('myquestionsview', compact('questionsCollection'));
    }

    // public function create(Quiz $quiz)
    // {
    //     return view('questions.create', compact('quiz'));
    // }

    public function store(Request $request, Quiz $quiz)
    {
        $question = new Question($request->all());
        $quiz->questions()->save($question);
        return redirect()->route('quizzes.show', $quiz);
    }
}

