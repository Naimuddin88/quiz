
@extends('layouts.app')

@section('content')
{{-- <button type="button" class="btn" data-toggle="modal" data-target="#formModal">
    Create
</button> --}}
@if(isset($successMessage))
<div class="alert alert-success">{{ $successMessage }}</div>
@endif

              
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                {{-- <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>                                         
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                  </tr> --}}
                                  
                                  {{-- <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Status</th>                                         
                                    <th> Actions</th>
                                  </tr> --}}
                            </thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="padding: 10px 20px;"></td>
                                <td style="padding: 10px 20px;"></td>
                                <td class="align-middle" style="padding: 10px 20px; display: flex;
                                gap: 10px;"></td>
</tr>
                              
  
</div>




</div>
@endsection
