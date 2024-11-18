@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<section class='card'>
  <div class='card-header'>
    <h4>{{ $viewData['header'] }}</h4>
  </div>
  <div class='card-body'>
    <div class='{{ $viewData['class'] }}' role='alert'>
      <b>{{ $viewData['message'] }}</b>
    </div>
  </div>
</section>
@endsection