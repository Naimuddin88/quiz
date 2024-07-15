@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                        </div>
                    </div>
                </div>
             
                
                <!-- Quiz List Section -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h5 class="font-weight-bolder">Quiz List</h5>
                        <ul class="list-group mt-3">
                            @foreach($quizzes as $quiz)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $quiz->name }}
                                    <a href="{{ route('quizzes.show', $quiz->id) }}" id="startQuiz" class="btn btn-primary btn-sm">Start Quiz</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End of Quiz List Section -->
            </div>
        </div>
    </div>
</div>
@endsection
