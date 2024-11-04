@extends('layouts.admin')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class='container py-4'>
    @if(session('success'))
        <div class='alert alert-success'>
            {{ session('success') }}
        </div>
    @endif
    <div class='card mb-4'>
        <div class='card-header bg-primary text-white'>
            <h4 class='mb-0'>{{ __('messages.create_user') }}</h4>
        </div>
        <div class='card-body'>
            @if($errors->any())
                <div class='alert alert-danger'>
                    <ul class='mb-0'>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method='POST' action='{{ route('admin.user.create') }}'>
              @csrf
              <div class='row mb-3'>
                <div class='col-md-4'>
                    <label for='name' class='form-label'>{{ __('messages.name') }}:</label>
                    <input id='name' name='name' value='{{ old('name') }}' type='text' class='form-control' required>
                </div>
                <div class='col-md-4'>
                    <label for='lastName' class='form-label'>{{ __('messages.last_name') }}:</label>
                    <input id='lastName' name='lastName' value='{{ old('lastName') }}' type='text' class='form-control' required>
                </div>
                <div class='col-md-4'>
                    <label for='email' class='form-label'>{{ __('messages.email') }}:</label>
                    <input type='email' id='email' name='email' value='{{ old('email') }}' class='form-control' required>
                </div>
                <div class='col-md-4'>
                    <label for='address' class='form-label'>{{ __('messages.address') }}:</label>
                    <input id='address' name='address' value='{{ old('address') }}' type='text' class='form-control' required>
                </div>
                <div class='col-md-4'>
                    <label for='username' class='form-label'>{{ __('messages.user_name') }}:</label>
                    <input type='text' id='username' name='username' value='{{ old('username') }}' class='form-control' required>
                </div>
                <div class='col-md-4'>
                    <label for='password' class='form-label'>{{ __('messages.password') }}:</label>
                    <input type='password' minlength='8' id='password' name='password' value='{{ old('password') }}' class='form-control' required>
                </div>
                <div class='mb-3'>
                    <label for='rol' class='form-label'>{{ __('messages.rol') }}:</label>
                    <select id='rol' name='rol' class='form-select' required>
                        <option value=''>{{ __('messages.select_rol') }}</option>
                        <option value='Admin'>{{ __('messages.admin') }}</option> 
                        <option value='Customer'>{{ __('messages.customer') }}</option>                         
                    </select>
                </div>
                <div class='mb-3'>
                    <label for='state' class='form-label'>{{ __('messages.state') }}:</label>
                    <select id='state' name='state' class='form-select' required>
                        <option value=''>{{ __('messages.select_state') }}</option>
                        <option value='Active'>{{ __('messages.active') }}</option> 
                        <option value='Inactive'>{{ __('messages.inactive') }}</option>                         
                    </select>
                </div>
                <div class='md-3'>
                    <label for='balance' class='form-label'>{{ __('messages.balance') }}:</label>
                    <input type='number' id='balance' name='balance' value='{{ old('balance') }}' class='form-control' required>
                </div>
                <br>
                <div class='text-center'>
                    <br>
                    <input type='submit' class='btn btn-primary' value='{{ __('messages.save') }}'/>
                </div>
              </div> 
            </form>
        </div>
      </div>
    <div class='card mt-4'>
        <div class='card-header'>
            {{ __('messages.manage_user') }}
        </div>
        <div class='card-body'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>{{ __('messages.name') }}</th>
                        <th scope='col'>{{ __('messages.last_name') }}</th>
                        <th scope='col'>{{ __('messages.email') }}</th>
                        <th scope='col'>{{ __('messages.address') }}</th>
                        <th scope='col'>{{ __('messages.rol') }}</th>
                        <th scope='col'>{{ __('messages.state') }}</th>
                        <th scope='col'>{{ __('messages.balance') }}</th>
                        <th scope='col'>{{ __('messages.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($viewData['users'] as $user)
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
                                <a class='btn btn-primary' href='{{ route('admin.user.edit', ['id' => $user->getId()]) }}'>
                                    <i class='bi-pencil'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection