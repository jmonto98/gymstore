@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<section class='container py-4'>
    @if(session('success'))
        <div class='alert alert-success'>
            {{ session('success') }}
        </div>
    @endif
    <div class='card mb-4'>
        <div class='card-header bg-primary text-white'>
            <h4 class='mb-0'>{{ __('messages.modify_order') }}</h4>
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
            <form method='#' action='#' enctype='multipart/form-data'>
                @csrf
                <div class='row mb-3'>
                    <div class='col-md-4'>
                        <label for='name' class='form-label'>{{ __('messages.name') }}:</label>
                        <input id='name' name='name' value='{{ old('name') }}' type='text' class='form-control' required>
                    </div>
                    <div class='col-md-4'>
                        <label for='price' class='form-label'>{{ __('messages.price') }}:</label>
                        <input id='price' name='price' value='{{ old('price') }}' type='number' step='0.01' class='form-control' required>
                    </div>
                    <div class='col-md-4'>
                        <label for='stock' class='form-label'>{{ __('messages.stock') }}:</label>
                        <input id='stock' name='stock' value='{{ old('stock') }}' type='number' class='form-control' required>
                    </div>
                </div>
                <div class='mb-3'>
                    <label for='category_id' class='form-label'>{{ __('messages.select_a_category') }}:</label>
                    <select id='category_id' name='category_id' class='form-select' required>
                        <option value=''>{{ __('messages.select_a_category') }}</option>
                        @foreach($viewData['orders'] as $order)
                            <option value='{{ $order->id }}' {{ old('id') == $order->id ? 'selected' : '' }}>
                                {{ $order->name }}
                            </option>
                        @endforeach
                    </select>            
        </div>
    </div>

    <div class='card mt-4'>
        <div class='card-header'>
            {{ __('messages.manage_orders') }}
        </div>
        <div class='card-body'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>{{ __('messages.id') }}</th>
                        <th scope='col'>{{ __('messages.user_id') }}</th>
                        <th scope='col'>{{ __('messages.user_name') }}</th>                  
                        <th scope='col'>{{ __('messages.total_order') }}</th>
                        <th scope='col'>{{ __('messages.state') }}</th>    
                        <th scope='col'>{{ __('messages.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['orders'] as $order)
                        <tr>
                            <td>{{ $order->getId() }}</td>
                            <td>{{ $order->user->getId()}}</td>
                            <td>{{ $order->user->getLastName().' '. $order->user->getName() }}</td>
                            <td>{{ $order->getTotalOrder() }}</td>
                            <td>{{ $order->getstatus() }}</td>
                            
                            <td>
                                <a class='btn btn-primary' href='{{ route('admin.category.edit', ['id' => $order->getId()]) }}'>
                                    <i class='bi-pencil'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection