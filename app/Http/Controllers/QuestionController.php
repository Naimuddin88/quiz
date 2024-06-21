<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Quiz;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'options' => 'required|array|min:4|max:4',
            'options.*' => 'required|string|max:255',
        ]);

        $question = Question::create([
            'quiz_id' => $request->quiz_id,
            'question' => $request->question,
        ]);

        foreach ($request->options as $index => $optionText) {
            Option::create([
                'question_id' => $question->id,
                'option' => $optionText,
                'is_correct' => $index == $request->correct_option, // Adjust this as needed
            ]);
        }

        return redirect()->back()->with('success', 'Question created successfully!');
    }
}
