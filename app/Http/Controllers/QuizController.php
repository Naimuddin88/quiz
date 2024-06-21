<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Option;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        // $quizzes = Quiz::with(['options'])->get();
        //         // $quizzCount = count($quizzes->questions());
        // return view('quizzes.index', compact('quizzes'));

        $quizzes = Quiz::with('questions')->get();
        // $quizzCount = count($quizzes->questions());
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

    public function show($id)
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
