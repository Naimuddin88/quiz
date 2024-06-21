@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Create New Quiz</h2>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Quiz Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="form-group">
            <label for="time">Time(Min)</label>
            <input type="text" class="form-control" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="Tmark">Total Mark</label>
            <input type="text" class="form-control" id="Tmark" name="Tmark" required>
        </div>
        <div class="form-group">
            <label for="Pmark">Pass Mark</label>
            <input type="text" class="form-control" id="Pmark" name="Pmark" required>
        </div>
        {{-- <div class="form-group">
            <label for="question">Question</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <div class="form-group">
            <label for="options">Options</label>
            @for ($i = 0; $i < 4; $i++)
                <input type="text" class="form-control mb-2" name="options[]" required>
            @endfor
        </div>
        <div class="form-group">
            <label for="correct_option">Correct Option</label>
            <select class="form-control" id="correct_option" name="correct_option" required>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
        </div> --}}


        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    
    {{-- <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Quiz Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
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
        <div class="form-group">
            <label for="correct_option">Correct Option</label>
            <select class="form-control" id="correct_option" name="correct_option" required>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form> --}}
</div>



@endsection
