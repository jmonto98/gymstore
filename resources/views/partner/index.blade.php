@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
  @foreach ($viewData['partners'] as $partner)
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <img src="{{ $partner['image'] }}" class="card-img-top" alt="{{ $partner['name'] }}" width="300" height="300">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $partner['name'] }}</h5>
          <p class="card-text">{{ $partner['description'] }}</p>
          <p class="card-text"><strong>Precio:</strong> ${{ number_format($partner['price'], 2) }}</p>
          <a href="{{ $partner['url'] }}" target="_blank" class="btn btn-primary">
            Buy product
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
