@extends('layouts.app')
@section('title', 'User')
@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create User</h4>
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
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol:</label>
                    <select id="rol" name="rol" class="form-select" required>
                        <option value="">Select a Rol</option>
                        <option value="Administrator">Administrator</option> 
                        <option value="Customer ">Customer</option>                         
                    </select>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State:</label>
                    <select id="state" name="state" class="form-select" required>
                        <option value="">Select a State</option>
                        <option value="Active">Active</option> 
                        <option value="Inactive">Inactive</option>                         
                    </select>
                </div>
                <div class="md-3">
                        <label for="balance" class="form-label">Balance:</label>
                        <input type="number" id="balance" name="balance" value="{{ old('balance') }}" type="text"
                            class="form-control" required>
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
  </div>
  <!-- //Manager User -->
    <div class="card mt-4">
        <div class="card-header">
            Manage User
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Rol</th>
                        <th scope="col">State</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->getId() }}</td>
                            <td>{{ $user->getName() }}</td>
                            <td>{{ $user->getLastName() }}</td>
                            <td>{{ $user->getEmail() }}</td>
                            <td>{{ $user->getAddress() }}</td>
                            <td>{{ $user->getRol() }}</td>
                            <td>{{ $user->getState() }}</td>
                            <td>{{ $user->getBalance() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('user.edit', ['id' => $user->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
 </div>
@endsection