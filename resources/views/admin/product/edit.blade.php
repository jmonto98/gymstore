@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        {{__('messages.edit_product')}}
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">{{__('messages.name')}}:</label>
                    <input id="name" name="name" value="{{ old('name', $viewData['product']->getName()) }}" type="text"
                        class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">{{__('messages.price')}}:</label>
                    <input id="price" name="price" value="{{ old('price', $viewData['product']->getPrice()) }}" type="number"
                        step="0.01" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="stock" class="form-label">{{__('messages.stock')}}:</label>
                    <input id="stock" name="stock" value="{{ old('stock', $viewData['product']->getStock()) }}" type="number"
                        class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="category_id" class="form-label">{{__('messages.select_a_category')}}:</label>
                    <select id="category_id" name="category_id" class="form-control" required>
                        <option value="">{{__('messages.select_a_category')}}</option>
                        @foreach($viewData['categories'] as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id', $viewData['product']->getCategoryId()) == $category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">{{__('messages.state')}}:</label>
                    <select id="state" name="state" class="form-select" required>
                        <option value="active" {{ old('state') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('state') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="image" class="form-label">{{__('messages.image')}}:</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="col-md-6">
                    <label for="video" class="form-label">{{__('messages.video_url')}}:</label>
                    <input id="video" name="video" value="{{ $viewData['useMode'] }}" type="text"
                        class="form-control" required>
                </div>
                <div class="col-md-6">
                    @if ($viewData['product']->getImage())
                    <div class="mb-3"><br>
                        <img src="{{ asset('storage/' . $viewData['product']->getImage()) }}" alt="Current Image" class="img-fluid"
                            style="max-height: 150px;">
                    </div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{__('messages.update')}}</button>
        </form>
    </div>
</div>
@endsection