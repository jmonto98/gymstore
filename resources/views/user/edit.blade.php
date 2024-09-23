@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit User</h4>
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

            <form method="POST" action="{{ route('user.update', ['id' => $viewData['user']->getId()]) }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" value="{{ old('Name',$viewData['user']->getName()) }}" type="text" class="form-control"
                            required>
                </div>
                <div class="col-md-4">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input id="lastName" name="lastName" value="{{ old('LastName',$viewData['user']->getLastName()) }}" type="text"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('Email',$viewData['user']->getEmail()) }}"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="address" class="form-label">Address:</label>
                        <input id="address" name="address" value="{{ old('Address',$viewData['user']->getAddress()) }}" type="text"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" id="username" name="username" value="{{ old('Username',$viewData['user']->getUsername()) }}"
                            class="form-control" required>
                </div>
                <div class="col-md-4">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" minlength="8" id="password" name="password" value="{{ old('Password',$viewData['user']->getPassword()) }}" type="text"
                            class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol:</label>
                    <select id="rol" name="rol" class="form-select" value="{{ old('Rol',$viewData['user']->getRol()) }}" required>
                        <option value="">Select a Rol</option>
                        <option value="Admin">Admin</option> 
                        <option value="Customer ">Customer</option>                         
                    </select>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State:</label>
                    <select id="state" name="state" class="form-select" value="{{ old('State',$viewData['user']->getState()) }}" required>
                        <option value="">Select a State</option>
                        <option value="Active">Active</option> 
                        <option value="Inactive">Inactive</option>                         
                    </select>
                </div>
                <div class="md-3">
                        <label for="balance" class="form-label">Balance:</label>
                        <input type="number" id="balance" name="balance" value="{{ old('Balance',$viewData['user']->getBalance()) }}" type="text"
                            class="form-control" required>
                </div>
                <br>
                <div class="text-center">
                    <br>
                  <input type="submit" class="btn btn-primary" value="Update"/>
                </div>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endsection