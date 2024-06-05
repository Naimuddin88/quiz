<!-- resources/views/user/index.blade.php -->

@extends('layouts.app')

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
    Create
</button>
@if(isset($successMessage))
<div class="alert alert-success">{{ $successMessage }}</div>
@endif
                    {{-- @if(session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif --}}
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                {{-- <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>                                         
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                  </tr> --}}
                                  <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Status</th>                                         
                                    <th>Actions</th>
                                  </tr>
                            </thead>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td style="padding: 10px 20px;">{{ $user->description }}</td>
                                <td style="padding: 10px 20px;">{{ $user->status }}</td>
                                <td class="align-middle" style="padding: 10px 20px; display: flex;
                                gap: 10px;">
                                {{-- text-secondary font-weight-bold text-xs --}}
                                    <a href="{{ url('edit/'.$user->id) }}" class=" fw-normal bg-light-red border-0 data-delete p-1 px-2 ms-2 rounded" data-toggle="tooltip" data-original-title="Edit user">
                                      Edit
                                    </a> 
                                    {{-- <button 
                                    class="fw-normal bg-light-red border-0 data-delete p-1 px-2 ms-2 rounded" 
                                    data-toggle="tooltip" 
                                    data-original-title="Edit user" 
                                    onclick="location.href='{{ url('edit/'.$user->id) }}'">
                                    Edit
                                </button> --}}

                                     {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                                        Edit User
                                    </button>
                                   --}}
                                    <a href="{{ url('delete/'.$user->id) }}" class="fw-normal bg-light-red border-0 data-delete p-1 px-2 ms-2 rounded">
                                        Delete
                                      </a>
                                  </td>
                
                                <!-- Add table cells for other fields -->
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="formModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                  <form action="{{ route('form.submit') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                          <input type="text" class="form-control" id="description" name="description" required>
                      </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" class="form-control" id="password" name="password" required>
                      </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> --}}

            </div>
        </div>
    </div>
</div>




</div>
@endsection
