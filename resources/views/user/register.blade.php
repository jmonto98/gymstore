@extends('layouts.admin')
@section('title', 'Register new user')
@section('content')

<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Welcome User</h4>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('user.create') }}">
              @csrf
              <div class="row mb-3">
                <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control"
                            required>
                </div>
                <div class="col-md-4">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input id="lastName" name="lastName" value="{{ old('lastName') }}" type="text" 
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="address" class="form-label">Address:</label>
                        <input id="address" name="address" value="{{ old('address') }}" type="text" 
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" minlength="8" id="password" name="password" value="{{ old('password') }}" type="text"
                            class="form-control" required>
                </div>
                <div class="md-3">
                        <label for="balance" class="form-label">Balance:</label>
                        <input type="number" id="balance" name="balance" value="{{ old('balance') }}" type="text"
                            class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" id="rol" name="rol" value="Customer" class="form-control" required>
                    <input type="hidden" id="state" name="state" value="Active" class="form-control" required>
                </div> 
                <br>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Save"/>
                </div>
            </div> 
          </form>
        </div>
    </div>  
 </div>
@endsection