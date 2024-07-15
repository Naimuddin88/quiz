@extends('layouts.app')

@section('content')

<div class="container">
    <h6>{{ $quiz->name }}</h6>
    <p>Time: {{ $quiz->time }}</p>
    <p>Total Marks: {{ $quiz->Tmark }}</p>
    <p>Passing Marks: {{ $quiz->Pmark }}</p>

    <h5>Questions</h5>
    @if($quiz->questions && $quiz->questions->count() > 0)
    <form method="POST" action="{{ route('submit.quiz', $quiz->id) }}">
        @csrf
            <ul style="width:70%">
                @foreach ($quiz->questions as $question)
                    <li>
                        {{ $question->question }}
                               
                        <div class="radio-buttons row">
                            <div class="col" style="margin-top: 6px;">     
                                <label for="agree" style="margin: 14px;{{ $question->id }}">Agree</label>
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                            </div>
                            <div class="col" style="margin-top: 52px;">     
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col" style="margin-top: 52px;">     
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col" style="margin-top: 52px;">     
                                <input type="radio" id="agree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="agree">
                                <label for="agree{{ $question->id }}"></label>
                            </div>
                            <div class="col" style="margin-top: 52px;">     
                                <input type="radio"  id="disagree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="disagree">
                                <label for="disagree{{ $question->id }}"></label>
                            </div>
                            <div class="col" style="margin-top: 6px;">     
                                <label for="disagree" style="margin: 14px; {{ $question->id }}">Disagree</label>
                                <input type="radio" id="disagree{{ $question->id }}" name="questions_extra[{{ $question->id }}]" value="disagree">
                            </div>
                            @foreach($question->options as $option)
                            <div class="col" style="margin-top: 52px;">     
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
</div>

@endsection
