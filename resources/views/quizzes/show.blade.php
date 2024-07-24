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
        {{-- <form method="POST" action="{{ route('submit.quiz', $quiz->id) }}"> --}}
            <form action="{{ route('quiz.submit', ['quizId' => $quiz->id]) }}" method="POST">

            @csrf
                <ul style="width:70%">
                    @foreach ($quiz->questions as $question)
            <li>
                {{ $question->question }}
                <div class="radio-group">
                    @for ($j = 1; $j <= 6; $j++)
                        <div class="radio">
                            <input type="radio" name="question_{{ $question->id }}" id="question_{{ $question->id }}_option_{{ $j }}" value="{{ $j }}" required>
                            @if ($j == 1)
                                <label for="question_{{ $question->id }}_option_{{ $j }}">Agree</label>
                            @elseif ($j == 6)
                                <label for="question_{{ $question->id }}_option_{{ $j }}">Disagree</label>
                            @endif
                        </div>
                    @endfor
                </div>
            </li>
        @endforeach
                </ul>
                <button type="submit" class="btn btn-primary">Submit Quiz</button>
            </form>
        @else
            <p>No questions available for this quiz.</p>
        @endif
    @endif
</div>

<style>
    .radio-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.radio {
    margin: 0 5px;
}
</style>
@endsection
