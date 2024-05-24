@extends('layouts.app')

@section('content')
<button type="button" class="btn" data-toggle="modal" onclick="showCreateModal()">Create</button>

@if(isset($successMessage))
<div class="alert alert-success">{{ $successMessage }}</div>
@endif

<div class="card-body px-0 pt-0 pb-2">
    <table id="myTable" class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->description }}</td>
                <td>{{ $user->status }}</td>
                <td class="align-middle">
                    <div class="dropdown">
                        <button class="btn btn-link text-secondary mb-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" onclick="showEditModal({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}', '{{ $user->description }}', '{{ $user->status }}')">Edit</button>
                            <a href="{{ url('delete/'.$user->id) }}" class="dropdown-item">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('components.modal')

<script>
 function showCreateModal() {
    $('#userModalLabel').text('Create User');
    $('#userForm').attr('action', '{{ route("users.store") }}');
    $('#userMethod').val('POST');
    $('#userForm').find('input[name="_method"]').remove();
    $('#name').val('');
    $('#email').val('');
    $('#description').val('');
    $('#status').val('');
    $('#password').attr('required', 'required');
    $('#password').val('');
    $('#passwordField').show();
    $('#submitButton').text('Create');
    $('#userModal').modal('show');
}

function showEditModal(id, name, email, description, status) {
    $('#userModalLabel').text('Edit User');
    $('#userForm').attr('action', '/users/' + id);
    $('#userForm').find('input[name="_method"]').remove();
    $('#userForm').append('<input type="hidden" name="_method" value="PATCH">');
    $('#name').val(name);
    $('#email').val(email);
    $('#description').val(description);
    $('#status').val(status);
    $('#password').removeAttr('required');
    $('#password').val('');
    $('#passwordField').hide();
    $('#submitButton').text('Update');
    $('#userModal').modal('show');
}


</script>


@endsection
