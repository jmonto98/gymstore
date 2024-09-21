@extends('layouts.admin')

@section('title', 'Add Video to Product')

@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add Video to Product</h4>
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

            <form method="POST" action="{{ route('useMode.store') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="product_id" class="form-label">Product:</label>
                        <select id="product_id" name="product_id" class="form-control" required>
                            <option value="">Select a product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="videoUrl" class="form-label">Video URL:</label>
                        <input id="videoUrl" name="videoUrl" value="{{ old('videoUrl') }}" type="url" class="form-control" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Video</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Manage Videos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Video URL</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($useModes as $useMode)
                        <tr>
                            <td>{{ $useMode->id }}</td> <!-- Cambiado a $useMode->id -->
                            <td>{{ $useMode->product->name }}</td>
                            <td>{{ $useMode->videoUrl }}</td> <!-- Cambiado a $useMode->videoUrl -->
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('useMode.edit', ['id' => $useMode->id]) }}"> 
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('useMode.delete', $useMode->id) }}" method="POST"> 
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
