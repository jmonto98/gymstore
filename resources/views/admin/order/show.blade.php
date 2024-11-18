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
      @foreach ($viewData['order'] as $orders)
      <h4 class='mb-0'>{{ __('messages.show_details') }} {{ $orders->getId()  }}</h4>
    @endforeach
    </div>
  </div>
  <div class='card mt-4'>
    <div class='card-body'>
      <table class='table table-bordered table-striped'>
        @if($errors->any())
      <ul class='alert alert-danger list-unstyled'>
        @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
    @endforeach
      </ul>
    @endif
        <thead>
          <tr>
            <th scope='col'>{{ __('messages.product') }}</th>
            <th scope='col'>{{ __('messages.quantity') }}</th>
            <th scope='col'>{{ __('messages.unit_price') }}</th>
            <th scope='col'>{{ __('messages.total_items') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($viewData['items'] as $item)
        <tr>
        <td>{{ $item->product->getName() }}</td>
        <td>{{ $item->getQuantity() }}</td>
        <td>{{ $item->getPrice() }}</td>
        <td>{{ $item->getPrice() * $item->getQuantity() }}</td>
        </tr>
      @endforeach
        </tbody>

        <tr>
          <td colspan="3"><b>{{ __('messages.total_order') }}</td></b>
          <td><b>{{ $item->order->getTotalOrder() }}</td></b>
        </tr>
      </table>
      <td>
        <a class='btn btn-primary' href='{{ route('admin.order.index')}}'>
          Return
        </a>
      </td>
    </div>
  </div>

</section>
@endsection