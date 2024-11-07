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
            <h4 class='mb-0'>{{ __('messages.show_details') }}</h4>
        </div>
    </div>
    <div class='card mt-4'>
        <div class='card-body'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>{{ __('messages.order_id') }}</th>
                        <th scope='col'>{{ __('messages.product') }}</th>
                        <th scope='col'>{{ __('messages.quantity') }}</th>
                        <th scope='col'>{{ __('messages.price') }}</th>                  
                    </tr>
                </thead>
                <tbody>
                @foreach ($viewData['orders'] as $order)
                    <tr>
                        
                    </tr>
                @endforeach
                </tbody>
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