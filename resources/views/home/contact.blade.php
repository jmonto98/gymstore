@extends('layouts.app')
@section('title', 'Contact GymStore')
@section('subtitle', 'Get in Touch')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h2 class="text-center mb-4">Contact Us</h2>
      <p class="lead">
        At GymStore, we value communication with our customers. If you have any questions, suggestions, or need assistance, don't hesitate to get in touch with us.
      </p>
      <h3 class="mt-4">Contact Information</h3>
      <ul class="list-unstyled">
        <li><i class="fas fa-envelope me-2"></i> {{ $viewData["email"] }}</li>
        <li><i class="fas fa-phone me-2"></i> {{ $viewData["phone"] }}</li>
        <li><i class="fas fa-map-marker-alt me-2"></i> {{ $viewData["address"] }}</li>
      </ul>
      <div class="text-center mt-4">
        <a href="mailto:{{ $viewData['email'] }}" class="btn btn-primary">Send us an email</a>
      </div>
    </div>
  </div>
</div>
@endsection