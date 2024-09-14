@extends('layouts.admin')
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Create Categories
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('category.store') }}">
      @csrf
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name" value="{{ old('name') }}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Description:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="description" value="{{ old('description') }}" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection