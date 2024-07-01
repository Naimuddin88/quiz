<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // public function index()
    // {
    //     // $quizzes = Quiz::with(['options'])->get();
    //     //         // $quizzCount = count($quizzes->questions());
    //     // return view('quizzes.index', compact('quizzes'));

    //     $quizzes = Quiz::with('questions')->get();
    //     // $quizzCount = count($quizzes->questions());
    //     return view('quizzes.index', compact('quizzes'));
    // }

    public function index()
{
    $quizzes = Quiz::with('questions')->get();
    return view('quizzes.index', compact('quizzes'));
}

    public function create()
    {
        return view('quizzes.create');
    }

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

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }


// public function show($id)
// {
//     // Fetch quiz by question id
//     $quiz = Quiz::whereHas('questions', function ($query) use ($id) {
//         $query->where('id', $id);
//     })->firstOrFail();

//     // Fetch questions related to the quiz
//     $questions = $quiz->questions;

//     return view('quizzes.show', compact('quiz', 'questions'));
// }


public function createn()
{
    $quizzes = Quiz::all();
    return view('quizzes.new', compact('quizzes'));
}


// public function show($id)
//     {
//         $quiz = Quiz::findOrFail($id);
//         $questions = Question::where('quiz_id', $id)->with('options')->get();

//         return view('quizzes.show', compact('quiz', 'questions'));
//     }
//     public function showQuestion($id) {
//         $question = Question::with('options')->find($id);
//         dd($question->options); // Check if options are correctly fetched
//         return view('quizzes.show', compact('question'));
//     }
  
// public function show($id)
// {
//     // Fetch the quiz with its associated questions and options
//     $quiz = Quiz::with('questions.options')->find($id);

//     if (!$quiz) {
//         return redirect()->route('quiz.index')->with('error', 'Quiz not found.');
//     }
//     // dd($quiz->toArray());
//     // Pass the quiz and its questions to the view
//     return view('quizzes.show', compact('quiz'));
// }
public function show($id)
{
    $quiz = Quiz::with('questions.options')->find($id);

    if (!$quiz) {
        return redirect()->route('quizzes.index')->with('error', 'Quiz not found.');
    }

    // dd($quiz->toArray());
    return view('quizzes.show', compact('quiz'));
}
  
    public function submit(Request $request, Quiz $quiz)
    {
        // Retrieve all submitted answers
        $answers = $request->input('questions');

        // Process the answers
        // foreach ($answers as $questionId => $optionId) {
        //     // Perform necessary actions such as storing answers
        //     // and checking if the selected options are correct
        // }

        // Redirect to results page
        return redirect()->route('quizzes.result', $quiz->id);
    }

    public function results(Quiz $quiz)
    {
        // Initialize results array
        $results = [];
    
        // Example logic to populate results array
        $questions = $quiz->questions()->with('options')->get();
        foreach ($questions as $question) {
            $selectedOption = $question->options->firstWhere('id', request()->input("questions.{$question->id}"));
            $correctOption = $question->options->firstWhere('is_correct', true);
    
            // Check if selectedOption is null before accessing its properties
            $selectedOptionText = $selectedOption ? $selectedOption->option_text : 'None';
            $correctOptionText = $correctOption ? $correctOption->option_text : 'None';
    
            $results[] = [
                'question' => $question->question,
                'selected_option' => $selectedOptionText,
                'correct_option' => $correctOptionText,
                'is_correct' => $selectedOption && $selectedOption->is_correct,
            ];
        }
    
        // Pass results to the view
        return view('quizzes.result', [
            'quiz' => $quiz,
            'results' => $results,
            'prevQuizId' => null, // Replace with actual previous quiz ID if needed
            'nextQuizId' => null, // Replace with actual next quiz ID if needed
        ]);
    }
}
