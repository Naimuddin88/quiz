<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quiz Results</h1>
    @if(isset($results) && is_array($results) && count($results) > 0)
        <ul>
            @foreach($results as $result)
                <li>
                    <strong>Question:</strong> {{ $result['question'] }}<br>
                    <strong>Selected Option:</strong> {{ $result['selected_option'] }}<br>
                    <strong>Correct Option:</strong> {{ $result['correct_option'] }}<br>
                    @if($result['is_correct'])
                        <span style="color: green;">Correct Answer!</span>
                    @else
                        <span style="color: red;">Incorrect Answer!</span>
                    @endif
                </li>
            @endforeach
        </ul>
        <div style="margin-top: 20px;">
            @if($prevQuizId)
                <a href="{{ route('quiz.show', $prevQuizId) }}" class="btn btn-primary">Previous Quiz</a>
            @else
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Quiz Index</a>
            @endif
            @if($nextQuizId)
                <a href="{{ route('quiz.show', $nextQuizId) }}" class="btn btn-primary">Next Quiz</a>
            @endif
        </div>
    @else
        <p>No results to display.</p>
    @endif
</div>
=======
<!-- resources/views/quizzes/results.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file set up -->

@section('content')
    <div class="container">
        <h1>Quiz Results</h1>
        @if(count($results) > 0)
            <ul>
                @foreach($results as $result)
                    <li>
                        <strong>Question:</strong> {{ $result['question'] }}<br>
                        <strong>Selected Option:</strong> {{ $result['selected_option'] }}<br>
                        <strong>Correct Option:</strong> {{ $result['correct_option'] }}<br>
                        @if($result['is_correct'])
                            <span style="color: green;">Correct Answer!</span>
                        @else
                            <span style="color: red;">Incorrect Answer!</span>
                        @endif
                    </li>
                @endforeach
            </ul>
            <div style="margin-top: 20px;">
                @if($prevQuizId)
                    <a href="{{ route('quiz.show', $prevQuizId) }}" class="btn btn-primary">Previous Quiz</a>
                @else
                    <a href="{{ route('quizzes.index') }}" class="btn btn-primary">Back to Quiz Index</a>
                @endif
                @if($nextQuizId)
                    <a href="{{ route('quiz.show', $nextQuizId) }}" class="btn btn-primary">Next Quiz</a>
                @endif
            </div>
        @else
            <p>No results to display.</p>
        @endif
    </div>
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
@endsection
