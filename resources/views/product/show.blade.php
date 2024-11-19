@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class='card mb-3'>
  <div class='row g-0'>
    <div class='col-md-4'>
      <img src='{{ asset('/storage/' . $viewData["product"]->getImage()) }}' class='img-fluid rounded-start'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>
          {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
        </h5>
        <p class='card-text'>{{ $viewData["product"]->getDescription() }}</p>

        @if($viewData['videoId'])
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $viewData['videoId'] }}" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        @else
          <p>{{ __('messages.no_video_available') }}</p>
        @endif

        <p class='card-text'>
          @for ($i = 0; $i < $viewData['ratingData']['fullStars']; $i++)
            <i class='fas fa-star text-warning'></i>
          @endfor

          @if ($viewData['ratingData']['halfStar'])
            <i class='fas fa-star-half-alt text-warning'></i>
          @endif

          @for ($i = $viewData['ratingData']['fullStars'] + ($viewData['ratingData']['halfStar'] ? 1 : 0); $i < 5; $i++)
            <i class='far fa-star text-warning'></i>
          @endfor

          <span>({{ $viewData['ratingData']['totalReviews'] }} reviews)</span>
        </p>

        <form method='POST' action='{{ route('cart.add', ['id' => $viewData["product"]->getId()]) }}'>
          <div class='row'>
            @csrf
            <div class='col-auto'>
              <div class='input-group col-auto'>
                <div class='input-group-text'>{{ __('messages.quantity') }}</div>
                @if ($viewData["product"]->getStock() == 0)
                  <input required type='number' min='1' max='{{ $viewData["product"]->getStock() }}'
                    class='form-control quantity-input' name='quantity' value='0'>
                @else
                  <input required type='number' min='1' max='{{ $viewData["product"]->getStock() }}'
                    class='form-control quantity-input' name='quantity' value='1'>
                @endif
              </div>
            </div>
            <div class='col-auto'>
              @if ($viewData["product"]->getStock() == 0)
                <button disabled class='btn bg-primary text-white'
                type='submit'>{{ __('messages.out_of_stock') }}</button>
              @else
                <button class='btn bg-primary text-white' type='submit'>{{ __('messages.add_to_cart') }}</button>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<hr>

@auth
  <h3>{{ __('messages.leave_a_review') }}</h3>
  <form action='{{ route('review.store', $viewData['product']->getId()) }}' method='POST'>
    @csrf
    <div class='form-group'>
    <label for='rating'>{{ __('messages.rating') }}:</label>
    <div class='star-rating'>
      <input type='radio' id='star5' name='rating' value='5'><label for='star5' title='5 stars'>&#9733;</label>
      <input type='radio' id='star4' name='rating' value='4'><label for='star4' title='4 stars'>&#9733;</label>
      <input type='radio' id='star3' name='rating' value='3'><label for='star3' title='3 stars'>&#9733;</label>
      <input type='radio' id='star2' name='rating' value='2'><label for='star2' title='2 stars'>&#9733;</label>
      <input type='radio' id='star1' name='rating' value='1'><label for='star1' title='1 star'>&#9733;</label>
    </div>
    </div>

    <div class='form-group'>
    <label for='comment'>{{ __('messages.comment') }}:</label>
    <textarea class='form-control' id='comment' name='comment' rows='3' required></textarea>
    </div>

    <button type='submit' class='btn btn-primary'>{{ __('messages.submit_review') }}</button>
  </form>
@else
  <p><a href='{{ route('login') }}'>{{ __('messages.log_in') }}</a> {{ __('messages.to_leave_a_review') }}.</p>
@endauth

<hr>
<h3>{{ __('messages.reviews') }}</h3>

@if($viewData['reviews']->isEmpty())
  <p>{{ __('messages.no_reviews_yet') }} {{ __('messages.be_the_first_to_leave_a_review') }}!</p>
@else
  <div id='reviews-container'>
    @foreach ($viewData['reviews'] as $review)
    <div class='review'>
    <strong>{{ $review->user->username }}:</strong>
    <div class='rating'>
      @for ($i = 1; $i <= 5; $i++)
      @if ($i <= $review->rating)
      <i class='fas fa-star text-warning'></i>
    @else
      <i class='far fa-star text-warning'></i>
    @endif
    @endfor
    </div>
    <p>{{ $review->comment }}</p>
    <small class='text-muted'>{{ $review->created_at->diffForHumans() }}</small>
    </div>
  @endforeach
  </div>
@endif

@if(isset($viewData['suggestedExercises']) && count($viewData['suggestedExercises']) > 0)
  <hr>
  <h3>{{ __('messages.suggested_exercises') }}</h3>

  <div class="row">
    @foreach($viewData['suggestedExercises'] as $exercise)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          @if(isset($exercise['gifUrl']) && is_string($exercise['gifUrl']))
            <div style="height: 200px; overflow: hidden;">
              <img src="{{ $exercise['gifUrl'] }}" 
                   class="card-img-top" 
                   style="object-fit: cover; height: 100%;"
                   alt="{{ is_string($exercise['name'] ?? '') ? $exercise['name'] : __('messages.exercise_name_unavailable') }}" 
                   onerror="this.src='{{ asset('images/default-exercise.jpg') }}'">
            </div>
          @endif

          <div class="card-body">
            <h5 class="card-title text-center">
              {{ is_string($exercise['name'] ?? '') ? $exercise['name'] : __('messages.exercise_name_unavailable') }}
            </h5>
            <p class="card-text">
              @if(isset($exercise['bodyPart']) && is_string($exercise['bodyPart']))
                <strong>Body Part:</strong> {{ ucfirst($exercise['bodyPart']) }}<br>
              @else
                <strong>Body Part:</strong> {{ __('messages.not_available') }}<br>
              @endif

              @if(isset($exercise['equipment']) && is_string($exercise['equipment']))
                <strong>Equipment:</strong> {{ ucfirst($exercise['equipment']) }}<br>
              @else
                <strong>Equipment:</strong> {{ __('messages.not_available') }}<br>
              @endif

              @if(isset($exercise['target']) && is_string($exercise['target']))
                <strong>Target Muscle:</strong> {{ ucfirst($exercise['target']) }}
              @else
                <strong>Target Muscle:</strong> {{ __('messages.not_available') }}
              @endif
            </p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@else
  <div class="alert alert-info">
    {{ __('messages.no_exercises_found') }}
  </div>
@endif

@endsection