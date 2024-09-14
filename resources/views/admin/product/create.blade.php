<!-- resources/views/admin/products/index.blade.php -->
@extends('layouts.admin')
@section('title', 'Product Management')
@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create Product</h4>
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

            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="price" class="form-label">Price:</label>
                        <input id="price" name="price" value="{{ old('price') }}" type="number" step="0.01"
                            class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="stock" class="form-label">Stock:</label>
                        <input id="stock" name="stock" value="{{ old('stock') }}" type="number" class="form-control"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>{{ $product->getStock() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
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