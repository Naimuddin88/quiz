{{-- @extends('layouts.app')

@section('content')
  <div class="form-group">
    <h2>Create Question</h2>
            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <div class="form-group">
            <label for="options">Options</label>
            @for ($i = 0; $i < 4; $i++)
                <input type="text" class="form-control mb-2" name="options[]" required>
            @endfor
        </div>
        {{-- <div class="form-group">
            <label for="correct_option">Correct Option</label>
            <select class="form-control" id="correct_option" name="correct_option" required>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
        </div> 
                <button type="submit" class="btn btn-primary">Save</button>

@endsection --}}

{{-- @extends('layouts.app')

@section('content')
<form action="{{ route('questions.store') }}" method="POST">
  <div class="form-group">
    <div class="dropdown">
      <select name="quiz_id" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        @foreach($quizzes as $quiz) 
        <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
        @endforeach
      </select>
    </div>
    <h2>Create Question</h2>
    
      @csrf
      <div class="form-group">
        <label for="question">Question</label>
        <input type="text" class="form-control" id="question" name="question" required>
      </div>
      <div class="form-group">
        <label for="options">Options</label>
        @for ($i = 0; $i < 4; $i++)
          <input type="text" class="form-control mb-2" name="options[]" required>
        @endfor
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection --}}


@extends('layouts.app')

@section('content')
<form action="{{ route('questions.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="quiz_id">Select Quiz</label>
    <select name="quiz_id" class="form-select" aria-label="Default select example" required>
        <option value="" selected disabled>Open this select menu</option>
        @foreach($quizzes as $quiz)
        <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
        @endforeach
    </select>
  </div>
  <h2>Create Question</h2>
  <div class="form-group">
    <label for="question">Question</label>
    <input type="text" class="form-control" id="question" name="question" required>
  </div>
  <div class="form-group">
    <label for="options">Options</label>
    @for ($i = 0; $i < 4; $i++)
      <input type="text" class="form-control mb-2" name="options[]" required>
    @endfor
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
