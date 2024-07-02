<<<<<<< HEAD
=======
{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $quiz->title }}</h1>
        <a href="{{ route('questions.create', $quiz) }}" class="btn btn-primary">Add Question</a>
        <ul>
            @foreach($quiz->questions as $question)
                <li>{{ $question->question }}</li>
            @endforeach
        </ul>
    </div>
@endsection --}}
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $quiz->name }}</h1>
<<<<<<< HEAD
=======
    <p>Status: {{ $quiz->status }}</p>
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
    <p>Time: {{ $quiz->time }}</p>
    <p>Total Marks: {{ $quiz->Tmark }}</p>
    <p>Passing Marks: {{ $quiz->Pmark }}</p>

    <h2>Questions</h2>
<<<<<<< HEAD
    @if($quiz->questions && $quiz->questions->count() > 0)
        <form action="{{ route('submit.quiz', $quiz->id) }}" method="POST">
            @csrf
            <ul style="width:70%">
                @foreach ($quiz->questions as $question)
                    <li>
                        {{ $question->question }}
                        
                        <div class="radio-buttons row">
                            <div class="col">
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}">Agree</label>
                            </div>
                            <div class="col">
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col">
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col">
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col">
                                <input type="radio" id="disagree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="disagree">
                                <label for="disagree{{ $question->id }}"></label>
                            </div>
                            <div class="col">
                                <input type="radio" id="disagree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="disagree">
                                <label for="disagree{{ $question->id }}">Disagree</label>
                            </div>
                            @foreach($question->options as $option)
                                <div class="col">
                                    <input type="radio" id="option{{ $option->id }}" name="questions[{{ $question->id }}]" value="{{ $option->id }}">
                                    <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
                                </div>
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="btn btn-primary">Submit Quiz</button>
        </form>
    @else
        <p>No questions available for this quiz.</p>
    @endif
=======
    <ul>
        {{-- @foreach($quiz->questions as $question)
            <li>{{ $question->text }}
                <ul>
                    @foreach($question->options as $option)
                        <li>{{ $option->option_text }} {{ $option->is_correct ? '(Correct)' : '' }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach --}}
        @foreach ($questions as $question)
    <tr>
        <td>{{ $question->id }}</td>
        <td>{{ $question->question }}</td>
        <td>{{ $question->quiz->name }}</td>
        <td>{{ $question->agree_response }}</td>
        <td>{{ $question->disagree_response }}</td>
        <!-- Other columns as needed -->
    </tr>
@endforeach
    </ul>
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
</div>
@endsection
