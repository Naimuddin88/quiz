@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Questions List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Quiz ID</th>
                <th>Agree Response</th>
                <th>Disagree Response</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->question }}</td>
                <td>{{ $question->quiz_id }}</td>
                <td>{{ $question->agree_response }}</td>
                <td>{{ $question->disagree_response }}</td>
                <!-- Add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
