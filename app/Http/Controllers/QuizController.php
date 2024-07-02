<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
<<<<<<< HEAD
use App\Models\Question;
=======
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
use Illuminate\Http\Request;

class QuizController extends Controller
{
<<<<<<< HEAD
    // public function index()
    // {
    //     $quizzes = Quiz::with('questions')->get();
    //     return view('quizzes.index', compact('quizzes'));
    // }

    public function index()
{
    $quizzes = Quiz::all(); // Retrieve all quizzes from the database
    return view('quizzes.index', compact('quizzes'));
}
=======
    public function index()
    {
        // $quizzes = Quiz::with(['options'])->get();
        //         // $quizzCount = count($quizzes->questions());
        // return view('quizzes.index', compact('quizzes'));

        $quizzes = Quiz::with('questions')->get();
        // $quizzCount = count($quizzes->questions());
        return view('quizzes.index', compact('quizzes'));
    }

>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
    public function create()
    {
        return view('quizzes.create');
    }

<<<<<<< HEAD
=======
    // public function store(Request $request)
    //  {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'status' => 'required|string',
    //         'time' => 'required|string',
    //         'Tmark' => 'required|string',
    //         'Pmark' => 'required|string',
    //         // 'question' => 'required|string|max:255',
    //         // 'options' => 'required|array|min:4',
    //         // 'options.*' => 'required|string|max:255',
    //         // 'correct_option' => 'required|integer|min:1|max:4',
    //     ]);
    //         // dd($request->all());
    //     $quiz = Quiz::create($request->only('name', 'status','time','Tmark','Pmark'));
    //             // $quiz = Quiz::create($request->only('name', 'question', 'status'));
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'time' => 'required|string',
            'Tmark' => 'required|string',
            'Pmark' => 'required|string',
        ]);
<<<<<<< HEAD

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
=======
    
        $quiz = Quiz::create($request->only('name', 'status', 'time', 'Tmark', 'Pmark'));
    
        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }

        // foreach ($request->options as $key => $option) {
        //     $quiz->options()->create([
        //         'option_text' => $option,
        //         'is_correct' => $key == $request->correct_option - 1,
        //     ]);
        // }

        // return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->only('title', 'status'));

        // Handle options update if necessary
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }

    public function show($id)
<<<<<<< HEAD
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

    public function submit(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
    
        // Retrieve all submitted answers
        $answers = $request->input('questions');
    
        // Process the answers here
    
        // Redirect to results page with the quiz ID
        return redirect()->route('quizzes.result', ['quiz' => $quiz->id]);
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
    
}
=======
{
    // Fetch the quiz by ID, including related questions and options
    $quiz = Quiz::with(['questions.options'])->findOrFail($id);

    // Pass the quiz data to the view
    return view('quizzes.show', compact('quiz'));
}

// public function createn()
// {
//     $quizzs = Quiz::where('status', 'active')->get();
//     return view('quizzes.new', compact('quizzs'));
// }
public function createn()
{
    $quizzes = Quiz::all();
    return view('quizzes.new', compact('quizzes'));
}
}
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac