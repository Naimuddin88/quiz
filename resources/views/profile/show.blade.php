@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Profile</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('u-profile.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="number">Mobile Number</label>
                <input type="number" name="number" id="number" value="{{ $user->number }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="men" {{ $user->gender == 'men' ? 'selected' : '' }}>Men</option>
                    <option value="women" {{ $user->gender == 'women' ? 'selected' : '' }}>Women</option>
                    <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="{{ $user->city }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
