@extends('layouts.app')

@section('content')
    <h3>Quizzes</h3>

    <div class="card-body px-0 pt-0 pb-2">
        <table id="myTable1" class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Questions Count</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time(Min)</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Mark</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pass Mark</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Created</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->questions ? $quiz->questions->count() : 0 }}</td>
                    <td>{{ $quiz->time }}</td>
                    <td>{{ $quiz->total }}</td>
                    <td>{{ $quiz->pass }}</td>
                    <td>{{ $quiz->status }}</td>
                    <td>{{ $quiz->date }}</td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal-{{ $quiz->id }}">Edit</a>
                            <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this quiz?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach($quizzes as $quiz)
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal-{{ $quiz->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Quiz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $quiz->title }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{ $quiz->status }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script>
        $(document).ready(function() {
            $('#myTable1').DataTable();
        });
    </script>
@endsection
