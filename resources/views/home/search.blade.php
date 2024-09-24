@extends('layouts.app')
@section('title', 'Search')
@section('subtitle', 'Search results for category')
@section('content')
    <!-- Mostrar los productos encontrados && $products->isNotEmpty()-->
@if(isset($viewData['products']) && $viewData['products']->isNotEmpty())
    <div class="row">
        @foreach($viewData['products'] as $product)
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
@elseif(isset($viewData['products']))
    <p>{{__('messages.no_products_were_found_in_this_category')}}</p>
@endif
@endsection
