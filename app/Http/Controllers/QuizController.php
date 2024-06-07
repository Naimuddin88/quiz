<?php 

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'time' => 'required|integer',
    //         'total' => 'required|integer',
    //         'pass' => 'required|integer',
    //         'status' => 'required|string|max:255',
    //     ]);
    
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    
    //     $quiz = Quiz::create([
    //         'name' => $request->name,
    //         'time' => $request->time,
    //         'total' => $request->total,
    //         'pass' => $request->pass,
    //         'status' => $request->status,
    //         'date' => now(), // Set the current date and time
    //     ]);
    
    //     return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully!');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->only('title',  'status'));

        // Handle options update if necessary

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }
    
    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }
}

