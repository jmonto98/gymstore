@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
        </h5>
        <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>

        @if(isset($viewData['useMode']) && $viewData['useMode']->videoUrl)
          <div class="mb-3">
            <h6>Video:</h6>
            @php
              preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $viewData['useMode']->videoUrl, $matches);
              $videoId = $matches[1] ?? null; 
            @endphp
            @if($videoId)
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
            @else
              <p>Video URL is not valid.</p>
            @endif
          </div>
        @endif

        <p class="card-text">
          @php
            $averageRating = round($viewData['product']->reviews->avg('rating'), 1);
            $fullStars = floor($averageRating);
            $halfStar = $averageRating - $fullStars >= 0.5;
          @endphp


          @for ($i = 0; $i < $fullStars; $i++)
            <i class="fas fa-star text-warning"></i>
          @endfor

          @if ($halfStar)
            <i class="fas fa-star-half-alt text-warning"></i>
          @endif

          @for ($i = $fullStars + ($halfStar ? 1 : 0); $i < 5; $i++)
            <i class="far fa-star text-warning"></i>
          @endfor

          <span>({{ $viewData['product']->reviews->count() }} reviews)</span>
        </p>

        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
          <div class="row">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                @if ( $viewData["product"]->getStock()==0)
                  <input required type="number" min="1" max="{{ $viewData["product"]->getStock() }}"" class="form-control quantity-input" name="quantity" value="0">
                @else
                <input required type="number" min="1" max="{{ $viewData["product"]->getStock() }}"" class="form-control quantity-input" name="quantity" value="1" >
                @endif
              </div>
            </div>
            <div class="col-auto">
            @if ( $viewData["product"]->getStock()==0)
              <button disabled class="btn bg-primary text-white" type="submit">Out of Stock</button>
            @else
              <button class="btn bg-primary text-white" type="submit">Add to cart</button>
            @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<hr>

{{-- Sección de reseñas --}}
<h3>Reviews</h3>

@if($viewData['product']->reviews->isEmpty())
    <p>No reviews yet. Be the first to leave a review!</p>
@else
    @foreach ($viewData['product']->reviews as $review)
        <div class="review">
            <strong>{{ $review->user->username }}:</strong>

            <div class="rating">
              @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $review->rating)
                  <i class="fas fa-star text-warning"></i>
                @else
                  <i class="far fa-star text-warning"></i>
                @endif
              @endfor
            </div>

            <p>{{ $review->comment }}</p>
        </div>
    @endforeach
@endif

<hr>

@auth
    <h3>Leave a Review</h3>
    <form action="{{ route('review.store', $viewData['product']->getId()) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rating">Rating:</label>
            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">&#9733;</label>
            </div>
        </div>

        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Log in</a> to leave a review.</p>
@endauth

@endsection
