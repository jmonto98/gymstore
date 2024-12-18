@extends('layouts.admin')
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
      <h4 class='mb-0'>{{ __('messages.create_category') }}</h4>
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

      <form method='POST' action='{{ route('admin.category.store') }}' enctype='multipart/form-data'>
        @csrf
        <div class='row mb-3'>
          <div class='col-md-6'>
            <label for='name' class='form-label'>{{ __('messages.name') }}:</label>
            <input id='name' name='name' value='{{ old('name') }}' type='text' class='form-control' required>
          </div>
          <div class='col-md-6'>
            <label for='description' class='form-label'>{{ __('messages.description') }}:</label>
            <textarea id='description' name='description' class='form-control'
              rows='3'>{{ old('description') }}</textarea>
          </div>
        </div>
        <div class='mb-3'>
          <label for='image' class='form-label'>{{ __('messages.image') }}:</label>
          <input type='file' id='image' name='image' class='form-control' accept='image/*' required>
        </div>
        <div class='text-center'>
          <button type='submit' class='btn btn-primary'>{{ __('messages.create_category') }}</button>
        </div>
      </form>
    </div>
  </div>

  <div class='card mt-4'>
    <div class='card-header'>
      {{ __('messages.manage_categories') }}
    </div>
    <div class='card-body'>
      <table class='table table-bordered table-striped'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>{{ __('messages.name') }}</th>
            <th scope='col'>{{ __('messages.edit') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($viewData['categories'] as $category)
        <tr>
        <td>{{ $category->getId() }}</td>
        <td>{{ $category->getName() }}</td>
        <td>
          <a class='btn btn-primary' href='{{ route('admin.category.edit', ['id' => $category->getId()]) }}'>
          <i class='bi-pencil'></i>
          </a>
        </td>
        </tr>
      @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection