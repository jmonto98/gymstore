@extends('layouts.app')
@section('title', 'Search')
@section('subtitle', 'Search results for category')
@section('content')
    <!-- Mostrar los productos encontrados && $products->isNotEmpty()-->
@if(isset($products) && $products->isNotEmpty())
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <img src="{{ asset( 'storage/'.$product->getImage()) }}" class="card-img-top" width="300" height="300">
                <div class="card-body text-center">
                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
                       class="btn bg-primary text-white">
                        {{ $product->getName() }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@elseif(isset($products))
    <p>No products were found in this category.</p>
@endif
@endsection
