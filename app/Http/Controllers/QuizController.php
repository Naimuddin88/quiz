<?php 


namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\QuizAnswer;
use App\Models\QuizSubmission;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    // public function index()
    // {
    //     $quizzes = Quiz::all();
    //     return view('quizzes.index', compact('quizzes'));
    // }

    // public function index()
    // {
    //     $quizzes = Quiz::with('questions')->get();
    //     return view('quizzes.index', compact('quizzes'));
    // }

//     public function index()
// {
//     // Eager load the users relationship
//     $quizzes = Quiz::with('users', 'questions')->get();

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

    // public function show($id)
    // {
    //     $quiz = Quiz::with('questions.options')->find($id);

    //     if (!$quiz) {
    //         return redirect()->route('quizzes.index')->with('error', 'Quiz not found.');
    //     }

    //     return view('quizzes.show', compact('quiz'));
    // }

    public function createn()
    {
        $quizzes = Quiz::all();
        return view('quizzes.new', compact('quizzes'));
    }

    // public function result($quizId)
    // {
    //     $quiz = Quiz::with('questions.options')->findOrFail($quizId);
    
    //     // Initialize results array
    //     $results = [];
    
    //     // Populate results array with data
    //     $questions = $quiz->questions;
    //     foreach ($questions as $question) {
    //         $selectedOption = $question->options->firstWhere('id', request()->input("questions.{$question->id}"));
    //         $correctOption = $question->options->firstWhere('is_correct', true);
    
    //         $selectedOptionText = $selectedOption ? $selectedOption->option_text : 'None';
    //         $correctOptionText = $correctOption ? $correctOption->option_text : 'None';
    
    //         $results[] = [
    //             'question' => $question->question,
    //             'selected_option' => $selectedOptionText,
    //             'correct_option' => $correctOptionText,
    //             'is_correct' => $selectedOption && $selectedOption->is_correct,
    //         ];
    //     }
    
    //     return view('quizzes.result', [
    //         'quiz' => $quiz,
    //         'results' => $results,
    //         'prevQuizId' => null,
    //         'nextQuizId' => null,
    //     ]);
    // }




// public function submitQuiz(Request $request, $quizId)
// {
//     $quiz = Quiz::findOrFail($quizId);
//     // dd($request->all());


//     // Check if questions are submitted
//     if ($request->has('questions') && is_array($request->questions)) {
//         foreach ($request->questions as $questionId => $answer) {
//             // Assuming you have a model named Answer to store the answers
//             Answer::create([
//                 'quiz_id' => $quiz->id,
//                 'question_id' => $questionId,
//                 'answer' => $answer,

//             ]);
//         }
//     }
//     //  else {
//     //     // return redirect()->route('quizzes.show', $quiz->id)->with('error', 'No questions answered.');
//     // }

//     // return redirect()->route('quizzes.result', $quiz->id)->with('success', 'Quiz submitted successfully!');
//          return redirect()->route('dashboard')->with('success', 'Quiz submitted successfully!');

// }
// public function submitQuiz(Request $request, $quizId)
//     {
//         $quiz = Quiz::findOrFail($quizId);

//         // Check if questions are submitted
//         if ($request->has('questions') && is_array($request->questions)) {
//             foreach ($request->questions as $questionId => $answer) {
//                 // Storing the answers in the database
//                 Answer::create([
//                     'quiz_id' => $quiz->id,
//                     'question_id' => $questionId,
//                     'answer' => $answer,
//                 ]);
//             }
//         } else {
//             return redirect()->route('quizzes.show', $quiz->id)->with('error', 'No questions answered.');
//         }

//         return redirect()->route('dashboard')->with('success', 'Quiz submitted successfully!');
//     }

    // public function submitQuiz(Request $request, $quizId)
    // {
    //     $quiz = Quiz::find($quizId);

    //     foreach ($quiz->questions as $question) {
    //         $answer = new QuizAnswer();
    //         $answer->quiz_id = $quiz->id;
    //         $answer->question_id = $question->id;
    //         $answer->answer = $request->input('question_' . $question->id);
    //         $answer->save();
    //     }

    //     return redirect()->route('dashboard')->with('success', 'Quiz submitted successfully!');
    // }


    public function submitQuiz(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $user = auth()->user();
    
        // Check if the user has already submitted the quiz
        $existingSubmission = $quiz->submissions()->where('user_id', $user->id)->first();
        if ($existingSubmission) {
            return redirect()->route('quizzes.result', ['quizId' => $quizId])
                             ->with('info', 'You have already submitted this quiz.');
        }
    
        // Process the answers
        foreach ($quiz->questions as $question) {
            $answer = new QuizAnswer();
            $answer->quiz_id = $quiz->id;
            $answer->question_id = $question->id;
            $answer->answer = $request->input('question_' . $question->id);
            $answer->user_id = $user->id; // Associate the answer with the user
            $answer->save();
        }
    
        return redirect()->route('quizzes.result', ['quiz' => $quizId])
        ->with('success', 'Quiz submitted successfully!');
    }
// public function showResults($quizId)
// {
//     $quiz = Quiz::findOrFail($quizId);
//     $user = auth()->user();
//     $submission = $quiz->submissions()->where('user_id', $user->id)->first();

//     return view('quizzes.result', compact('quiz', 'submission'));
// }
public function showResults($quizId)
{
    $quiz = Quiz::findOrFail($quizId);
    $user = auth()->user();
    
    // Retrieve the submission for the user and quiz
    $submission = $quiz->submissions()->where('user_id', $user->id)->first();

    // Pass the variables to the view
    return view('quizzes.result', [
        'quiz' => $quiz,
        'submission' => $submission,  // Ensure this is correctly passed
    ]);
}



public function show($quizId)
{
    $quiz = Quiz::findOrFail($quizId);
    $userId = Auth::id();

    // Check if the user has already submitted the quiz
    $submission = QuizSubmission::where('quiz_id', $quizId)
                                ->where('user_id', $userId)
                                ->first();

    if ($submission) {
        // If the user has already submitted the quiz, show the result
        return redirect()->route('quiz.result', ['quizId' => $quizId]);
    }

    // If not, show the quiz
    return view('quizzes.show', compact('quiz'));
}

public function submit(Request $request, $quizId)
{
    $userId = Auth::id();

    // Check if the user has already submitted the quiz
    $existingSubmission = QuizSubmission::where('quiz_id', $quizId)
                                        ->where('user_id', $userId)
                                        ->first();

    if ($existingSubmission) {
        // If the user has already submitted the quiz, redirect to the result page
        return redirect()->route('quizzes.result', ['quizId' => $quizId]);
    }

    // Save the quiz submission
    $submission = new QuizSubmission();
    $submission->quiz_id = $quizId;
    $submission->user_id = $userId;
    // Add other necessary fields from the request
    $submission->score = 0; // Provide a default value for score
    $submission->save();

    // Redirect to the quiz result page
    // return redirect()->route('quizzes.result', ['quizId' => $quizId]);
    return redirect()->route('quizzes.result', ['quiz' => $quizId])
        ->with('success', 'Quiz submitted successfully!');
}

public function result($quizId)
{
    $userId = Auth::id();

    // Get the user's submission
    $submission = QuizSubmission::where('quiz_id', $quizId)
                                ->where('user_id', $userId)
                                ->firstOrFail();

    // Get the quiz
    $quiz = Quiz::findOrFail($quizId);

    // Pass the submission and quiz to the view
    return view('quizzes.result', compact('submission', 'quiz'));
}
}
