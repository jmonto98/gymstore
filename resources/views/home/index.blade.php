@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ __('messages.search_by_category') }}</h4>
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
            <form method="POST" action="{{ route ('home.search') }}">
            @csrf
              <label for="name">Category name:</label>
              <input type="text" id="name" name="name">
              <button type="submit">Search</button>
            </form>
        </div>
        @if(isset($products) && $products->isNotEmpty())
    <h2>Products in this category:</h2>
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                Description: {{ $product->description }}<br>
                Price: ${{ number_format($product->price, 2) }}<br>
                Stock: {{ $product->stock }}
            </li>
        @endforeach
    </ul>
@elseif(isset($products))
    <p>No products were found in this category.</p>
@endif
</div>
@endsection