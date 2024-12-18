@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<section class='card mb-4'>
  <div class='card-header'>
    {{ __('messages.edit_category') }}
  </div>
  <div class='card-body'>
    @if($errors->any())
    <ul class='alert alert-danger list-unstyled'>
      @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
    @endforeach
    </ul>
  @endif
    <form method='POST' action='{{ route('admin.category.update', ['id' => $viewData['category']->getId()]) }}'
      enctype='multipart/form-data'>
      @csrf
      @method('PUT')
      <div class='row'>
        <div class='col'>
          <div class='mb-3 row'>
            <label class='col-lg-2 col-md-6 col-sm-12 col-form-label'>{{ __('messages.name') }}:</label>
            <div class='col-lg-10 col-md-6 col-sm-12'>
              <input name='name' value='{{ $viewData['category']->getName() }}' type='text' class='form-control'
                required>
            </div>
          </div>
        </div>
      </div>
      <div class='mb-3'>
        <label class='form-label'>{{ __('messages.description') }}:</label>
        <textarea class='form-control' name='description' rows='3'
          required>{{ $viewData['category']->getDescription() }}</textarea>
      </div>
      <div class='mb-3'>
        <label class='form-label'>{{ __('messages.image') }}:</label>
        <input type='file' name='image' class='form-control' accept='image/*'>
      </div>
      @if($viewData['category']->image)
      <div class='mb-3'>
      <label class='form-label'>{{ __('messages.current_image') }}:</label>
      <img src='{{ asset('storage/' . $viewData['category']->image) }}' alt='{{ $viewData['category']->getName() }}'
        style='width: 100px; height: auto;'>
      </div>
    @endif
      <button type='submit' class='btn btn-primary'>{{ __('messages.save') }}</button>
    </form>
  </div>
</section>
@endsection