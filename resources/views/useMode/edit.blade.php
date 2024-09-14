@extends('layouts.admin')

@section('title', $viewData['title'])

@section('content')
<div class="container py-4">
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ $viewData['title'] }}</h4>
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

            <form method="POST" action="{{ route('useMode.update', ['id' => $viewData['useMode']->id]) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="product_id" class="form-label">Product:</label>
                        <select id="product_id" name="product_id" class="form-control" required>
                            @foreach ($viewData['products'] as $product)
                                <option value="{{ $product->id }}" {{ $viewData['useMode']->product_id == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="videoUrl" class="form-label">Video URL:</label>
                        <input id="videoUrl" name="videoUrl" value="{{ old('videoUrl', $viewData['useMode']->videoUrl) }}" type="url" class="form-control" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Video</button>
                    <a href="{{ route('useMode.home.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
