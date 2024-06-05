@extends('layouts.app')

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
@endsection
