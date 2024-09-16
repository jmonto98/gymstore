@extends('layouts.admin')
@section('title', $title) {{-- Aquí accedemos directamente al título --}}
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('admin.product.update', ['id' => $product->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input id="name" name="name" value="{{ old('name', $product->getName()) }}" type="text"
                        class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Price:</label>
                    <input id="price" name="price" value="{{ old('price', $product->getPrice()) }}" type="number"
                        step="0.01" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="stock" class="form-label">Stock:</label>
                    <input id="stock" name="stock" value="{{ old('stock', $product->getStock()) }}" type="number"
                        class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="category_id" class="form-label">Category:</label>
                    <select id="category_id" name="category_id" class="form-control" required>
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ (old('category_id', $product->getCategoryId()) == $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State:</label>
                    <select id="state" name="state" class="form-select" required>
                        <option value="active" {{ old('state') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('state') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="image" class="form-label">Image:</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="col-md-6">
                    @if ($product->getImage())
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $product->getImage()) }}" alt="Current Image" class="img-fluid"
                                style="max-height: 150px;">
                        </div>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection