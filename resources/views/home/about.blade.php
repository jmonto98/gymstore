@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<section class='container'>
  <div class='row'>
    <div class='col-lg-8 mx-auto'>
      <h2 class='text-center mb-4'>{{ __('messages.welcome_to_gymstore') }}</h2>
      <p class='lead'>
        {{ __('messages.gymstore_description') }}
      </p>
      <p class='lead'>
        {{ __('messages.gymstore_team_description') }}
      </p>
      <div class='text-center mt-4'>
        <a href='{{ route('home.contact') }}' class='btn btn-primary'>{{ __('messages.contact_us') }}</a>
      </div>
    </div>
  </div>
</section>
@endsection