@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create Category</h4>
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

            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data"> <!-- Añadir enctype -->
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name:</label>
                        <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" name="image" class="form-control" accept="image/*" required> <!-- Campo para la imagen -->
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Manage Categories
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["categories"] as $category)
                        <tr>
                            <td>{{ $category->getId() }}</td>
                            <td>{{ $category->getName() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('category.edit', ['id' => $category->getId()]) }}">
                                    <i class="bi-pencil"></i>
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