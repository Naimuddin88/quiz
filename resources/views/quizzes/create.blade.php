@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h6>Create New Quiz</h6>
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
     


        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>



@endsection
