@extends('layouts.app')
@section('title', 'About GymStore')
@section('subtitle', 'Our Story')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h2 class="text-center mb-4">Welcome to GymStore</h2>
      <p class="lead">
        GymStore is your premier destination for all high-quality sports equipment. Founded in 2010, our mission is to provide fitness enthusiasts and athletes of all levels with the gear they need to achieve their goals.
      </p>
      <p>
        We take pride in offering a wide range of products, from weights and exercise machines to sportswear and nutritional supplements. Our team of experts is always available to advise you and help you find the perfect equipment for your workout routine.
      </p>
      <h3 class="mt-4">Contact Us</h3>
      <ul class="list-unstyled">
        <li><i class="fas fa-envelope me-2"></i> info@gymstore.com</li>
        <li><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</li>
        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Fitness Street, Sports City</li>
      </ul>
      <div class="text-center mt-4">
        <a href="{{ route('home.contact') }}" class="btn btn-primary">Get in Touch</a>
      </div>
    </div>
  </div>
</div>
@endsection