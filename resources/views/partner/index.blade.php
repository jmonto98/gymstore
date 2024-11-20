@extends('layouts.app')

@section('title', 'Partners Products')
@section('content')
<div class="container">
    <h1 class="my-4">Partners Products</h1>
    <div class="row">
        @foreach ($partners as $partner)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $partner['image'] ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $partner['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $partner['name'] }}</h5>
                        <p class="card-text">{{ $partner['description'] }}</p>
                        <p><strong>Price:</strong> ${{ number_format($partner['price'], 2) }}</p>
                        <a href="{{ $partner['url'] }}" target="_blank" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
