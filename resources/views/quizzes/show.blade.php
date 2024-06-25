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
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $quiz->name }}</h1>
    <p>Status: {{ $quiz->status }}</p>
    <p>Time: {{ $quiz->time }}</p>
    <p>Total Marks: {{ $quiz->Tmark }}</p>
    <p>Passing Marks: {{ $quiz->Pmark }}</p>

    <h2>Questions</h2>
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
</div>
@endsection
