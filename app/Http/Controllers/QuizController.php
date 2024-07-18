<?php 


namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // public function index()
    // {
    //     $quizzes = Quiz::all(); // Retrieve all quizzes from the database
    //     return view('quizzes.index', compact('quizzes'));
    // }
    // public function index()
    // {
    //     $quizzes = Quiz::with('questions')->get();
    //     return view('quizzes.index', compact('quizzes'));
    // }
    public function index()
    {
        $quizzes = Quiz::with(['submissions', 'questions'])->get();
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
            'status' => 'required|string',
            'time' => 'required|string',
            'Tmark' => 'required|string',
            'Pmark' => 'required|string',
        ]);

        $quiz = Quiz::create($request->only('name', 'status', 'time', 'Tmark', 'Pmark'));

        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'time' => 'required|string',
            'Tmark' => 'required|string',
            'Pmark' => 'required|string',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->only('name', 'status', 'time', 'Tmark', 'Pmark'));

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }

    public function show($id)
    {
        $quiz = Quiz::with('questions.options')->find($id);

        if (!$quiz) {
            return redirect()->route('quizzes.index')->with('error', 'Quiz not found.');
        }

        return view('quizzes.show', compact('quiz'));
    }

    public function createn()
    {
        $quizzes = Quiz::all();
        return view('quizzes.new', compact('quizzes'));
    }

    public function result($quizId)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($quizId);
    
        // Initialize results array
        $results = [];
    
        // Populate results array with data
        $questions = $quiz->questions;
        foreach ($questions as $question) {
            $selectedOption = $question->options->firstWhere('id', request()->input("questions.{$question->id}"));
            $correctOption = $question->options->firstWhere('is_correct', true);
    
            $selectedOptionText = $selectedOption ? $selectedOption->option_text : 'None';
            $correctOptionText = $correctOption ? $correctOption->option_text : 'None';
    
            $results[] = [
                'question' => $question->question,
                'selected_option' => $selectedOptionText,
                'correct_option' => $correctOptionText,
                'is_correct' => $selectedOption && $selectedOption->is_correct,
            ];
        }
    
        return view('quizzes.result', [
            'quiz' => $quiz,
            'results' => $results,
            'prevQuizId' => null,
            'nextQuizId' => null,
        ]);
    }


public function submitQuiz(Request $request, $quizId)
{
    $quiz = Quiz::findOrFail($quizId);
    // dd($request->all());


    // Check if questions are submitted
    if ($request->has('questions') && is_array($request->questions)) {
        foreach ($request->questions as $questionId => $answer) {
            // Assuming you have a model named Answer to store the answers
            Answer::create([
                'quiz_id' => $quiz->id,
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
        }
    }
    //  else {
    //     // return redirect()->route('quizzes.show', $quiz->id)->with('error', 'No questions answered.');
    // }

    // return redirect()->route('quizzes.result', $quiz->id)->with('success', 'Quiz submitted successfully!');
         return redirect()->route('dashboard')->with('success', 'Quiz submitted successfully!');

}
}
