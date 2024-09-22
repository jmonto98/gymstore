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
           <form method="POST" action="{{ route('home.search') }}">
                @csrf
                <input type="text" id="name" name="name" class="form-control" placeholder="Search by Category"><br>
                <button type="submit" class="btn bg-primary text-white">Search</button>
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
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><center>{{ __('messages.categories') }}</center></h4>
        </div>
        @csrf
        <div class="card-body">
            <div class="row">
                @foreach ($viewData["categories"] as $category)
                <div class="col-md-4 col-lg-3 mb-2">
                    <div class="card">
                        <img src="{{ asset( 'storage/'.$category->getImage()) }}" class="card-img-top" width="300" height="300">
                        <div class="card-body text-center">
                            <a href="{{ route('home.search', ['name'=> $category->getName()]) }}"
                            class="btn bg-primary text-white">
                            {{ $category->getName() }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
