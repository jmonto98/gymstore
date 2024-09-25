@extends('layouts.app')
@section('title', $viewData['title'])

@section('content')
<section class='container py-4'>
    @if(session('success'))
    <div class='alert alert-success'>
        {{ session('success') }}
    </div>
    @endif

    <div class='card mb-4'>
        <div class='card-header bg-primary text-white'>
            <h4 class='mb-0'>{{ __('messages.search_by_category') }}</h4>
        </div>

        <div class='card-body'>
            @if($errors->any())
            <div class='alert alert-danger'>
                <ul class='mb-0'>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method='POST' action='{{ route('home.search') }}'>
                @csrf
                <input type='text' id='name' name='name' class='form-control' placeholder='{{ __('messages.search_by_category') }}'><br>
                <button type='submit' class='btn bg-primary text-white'>{{ __('messages.search') }}</button>
            </form>
        </div>
        @if(isset($viewData['products']) && $viewData['products']->isNotEmpty())
        <h2>{{ __('messages.products_in_this_category') }}:</h2>
        <ul>
            @foreach($viewData['products'] as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                Description: {{ $product->description }}<br>
                Price: ${{ number_format($product->price, 2) }}<br>
                Stock: {{ $product->stock }}
            </li>
            @endforeach
        </ul>
        @elseif(isset($viewData['products']))
        <p>{{ __('messages.no_products_were_found_in_this_category') }}.</p>
        @endif
    </div>

    <div class='card mb-4'>
        <div class='card-header bg-primary text-white'>
            <h4 class='mb-0'>
                <center>{{ __('messages.Top_Sales') }}</center>
            </h4>
        </div>
        <div class='card-body'>
            <div class='row'>
                @foreach ($viewData['topProducts'] as $item)
                <div class='col-md-4 col-lg-3 mb-2'>
                    <div class='card'>
                        <a href='{{ route('product.show', $item->product->id) }}'>
                            <img src='{{ asset('storage/' . $item->product->image) }}' class='card-img-top' width='300' height='300'>
                        </a>
                        <div class='card-body text-center'>
                            <a href='{{ route('product.show', $item->product->id) }}' class='btn bg-primary text-white'>{{ $item->product->name }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class='card mb-4'>
        <div class='card-header bg-primary text-white'>
            <h4 class='mb-0'>
                <center>{{ __('messages.categories') }}</center>
            </h4>
        </div>
        <div class='card-body'>
            <div class='row'>
                @foreach ($viewData['categories'] as $category)
                <div class='col-md-4 col-lg-3 mb-2'>
                    <div class='card'>
                        <img src='{{ asset('storage/' . $category->getImage()) }}' class='card-img-top' width='300' height='300'>
                        <div class='card-body text-center'>
                            <a href='{{ route('home.search', ['name'=> $category->getName()]) }}' class='btn bg-primary text-white'>
                                {{ $category->getName() }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection