@extends('layouts.app')

@section('content')
<form action="{{ route('questions.store') }}" method="POST">
  @csrf
  <h4>Create Question</h4>

  <div class="form-group">
    <label for="quiz_id">Select Quiz</label>
    <select name="quiz_id" class="form-select" aria-label="Default select example" required>
        <option value="" selected disabled>Open this select menu</option>
        @foreach($quizzes as $quiz)
        <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="question">Question</label>
    <input type="text" class="form-control" id="question" name="question" required>
  </div>

  <div class="form-group">
    <label for="agree_response">Agree Response</label>
    <input type="text" class="form-control" id="agree_response" name="agree_response" required>
  </div>

  <div class="form-group">
    <label for="disagree_response">Disagree Response</label>
    <input type="text" class="form-control" id="disagree_response" name="disagree_response" required>
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection