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
            <h4 class='mb-0'>{{ __('messages.create_product') }}</h4>
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

            <form method='POST' action='{{ route('admin.product.store') }}' enctype='multipart/form-data'>
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
                        @foreach($viewData['categories'] as $category)
                            <option value='{{ $category->id }}' {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class='mb-3'>
                    <label for='state' class='form-label'>{{ __('messages.state') }}:</label>
                    <select id='state' name='state' class='form-select' required>
                        <option value='active' {{ old('state') == 'active' ? 'selected' : '' }}>{{ __('messages.active') }}</option>
                        <option value='inactive' {{ old('state') == 'inactive' ? 'selected' : '' }}>{{ __('messages.inactive') }}</option>
                    </select>
                </div>
                <div class='mb-3'>
                    <label for='image' class='form-label'>{{ __('messages.image') }}:</label>
                    <input class='form-control' type='file' id='image' name='image'>
                </div>
                <div class='col-md-4'>
                    <label for='video' class='form-label'>{{ __('messages.video_url') }}:</label>
                    <input id='video' name='video' value='{{ old('video') }}' type='text' class='form-control'>
                </div>
                <div class='text-center'>
                    <button type='submit' class='btn btn-primary'>{{ __('messages.create_product') }}</button>
                </div>
            </form>
        </div>
    </div>

    <div class='card mt-4'>
        <div class='card-header'>
            {{ __('messages.product_management') }}
        </div>
        <div class='card-body'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>{{ __('messages.name') }}</th>
                        <th scope='col'>{{ __('messages.price') }}</th>
                        <th scope='col'>{{ __('messages.stock') }}</th>
                        <th scope='col'>{{ __('messages.state') }}</th>
                        <th scope='col'>{{ __('messages.edit') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->state == 'active' ? __('messages.active') : __('messages.inactive') }}</td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('admin.product.edit', ['id' => $product->id]) }}'>
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