@extends('layouts.app')
<<<<<<< HEAD

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            {{-- <h5 class="font-weight-bolder">Soft UI Dashboard</h5> --}}
                        </div>
                    </div>
                </div>
             
                {{-- <a href="{{ route('questions.index') }}" class="btn btn-primary">Quiz Test Started</a> --}}
                
                <!-- Quiz List Section -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h5 class="font-weight-bolder">Quiz List</h5>
                        <ul class="list-group mt-3">
                            @foreach($quizzes as $quiz)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $quiz->name }}
                                    {{-- <a href="{{ route('questions.index') }}" class="btn btn-primary">Quiz Test Started</a> --}}
                                    <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-primary btn-sm">Start Quiz</a>
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
=======
@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                  <h5 class="font-weight-bolder">Soft UI Dashboard</h5>
                {{-- <p class="mb-1 pt-2 text-bold">Built by developers</p> --}}
                {{-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> --}}
                {{-- <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a> --}}
            </div>
        </div>
        {{-- <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
            <div class="bg-gradient-primary border-radius-lg h-100">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                </div>
            </div>
        </div> --}}
    </div>
    {{-- <button type="button" class="btn btn-primary">
        Create
    </button> --}}
    <a href="{{ route('questions.index') }}" class="btn btn-primary">Quiz Test Started</a>

</div>
</div>
</div>
</div>
  </div>
@endsection
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
