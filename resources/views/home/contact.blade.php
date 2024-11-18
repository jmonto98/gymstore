@extends('layouts.app')
@section('title', __('messages.contact_us'))
@section('subtitle', __('messages.contact_us'))
@section('content')
<section class='container'>
  <div class='row'>
    <div class='col-lg-8 mx-auto'>
      <p class='lead'>
        {{ __('messages.contact_us_message') }}
      </p>
      <h3 class='mt-4'>{{ __('messages.contact_information') }}</h3>
      <ul class='list-unstyled'>
        <li><i class='fas fa-envelope me-2'></i> {{ $viewData['email'] }}</li>
        <li><i class='fas fa-phone me-2'></i> {{ $viewData['phone'] }}</li>
        <li><i class='fas fa-map-marker-alt me-2'></i> {{ $viewData['address'] }}</li>
      </ul>
      <div class='text-center mt-4'>
        <a href='mailto:{{ $viewData['email'] }}' class='btn btn-primary'>{{ __('messages.send_us_an_email') }}</a>
      </div>
    </div>
  </div>
</section>
@endsection