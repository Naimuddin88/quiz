@extends('layouts.app')

@section('content')

<div class="container">
    <h5 class="font-weight-bolder">{{ $quiz->name }}</h5>
    <p>Time: {{ $quiz->time }}</p>
    <p>Total Marks: {{ $quiz->Tmark }}</p>
    <p>Passing Marks: {{ $quiz->Pmark }}</p>

    @php
        $user = auth()->user();
        $submission = $quiz->submissions->where('user_id', $user->id)->first();
    @endphp

    @if ($submission)
        <h5>Your Score</h5>
        <p>Score: {{ $submission->score }}</p>
        <p>You have already submitted this quiz.</p>
    @else
        <h5>Questions</h5>
        @if($quiz->questions && $quiz->questions->count() > 0)
            <div class="wrap">
                <form action="{{ route('quiz.submit', ['quizId' => $quiz->id]) }}" method="POST">
                    @csrf
                    <ul class="questions-list">
                        @foreach ($quiz->questions as $question)
                            <li class="question-item">
                                <div class="question-text">{{ $question->question }}</div>
                                <ul class="likert">
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="strong_agree" required>
                                        <label>Strongly agree</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="agree" required>
                                        <label>Agree</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="neutral" required>
                                        <label>Neutral</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="disagree" required>
                                        <label>Disagree</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="strong_disagree" required>
                                        <label>Strongly disagree</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="question_{{ $question->id }}" value="na" required>
                                        <label>N/A</label>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                    <button type="submit" class="btn btn-primary">Submit Quiz</button>
                </form>
            </div>
        @else
            <p>No questions available for this quiz.</p>
        @endif
    @endif
</div>

<style>
    html, body {
        padding: 0;
        margin: 0;
    }

    .wrap {
        font: 12px Arial, sans-serif;
    }

    .questions-list {
        list-style: none;
        padding: 0;
    }

    .question-item {
        margin-bottom: 20px;
    }

    .question-text {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .likert {
        list-style: none;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .likert:before {
        content: '';
        position: absolute;
        top: 5px; 
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #efefef;
        z-index: 0;
    }

    .likert li {
        position: relative;
        z-index: 1;
        width: 15%;
        text-align: center;
    }

    .likert li input[type=radio] {
        display: block;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .likert li label {
        display: block;
        margin-top: 5px;
        position: relative;
        z-index: 1;
    }

    .buttons {
        margin: 30px 0;
        padding: 0 4.25%;
        text-align: right;
    }

    .buttons button {
        padding: 5px 10px;
        background-color: #67ab49;
        border: 0;
        border-radius: 3px;
    }

    .buttons .clear {
        background-color: #e9e9e9;
    }

    .buttons .submit {
        background-color: #67ab49;
    }

    .buttons .clear:hover {
        background-color: #ccc;
    }

    .buttons .submit:hover {
        background-color: #14892c;
    }
</style>
@endsection
