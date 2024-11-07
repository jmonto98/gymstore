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
            <h4 class='mb-0'>{{ __('messages.manage_orders') }}</h4>
        </div>

    </div>

    <div class='card mt-4'>

        <div class='card-body'>
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th scope='col'>{{ __('messages.id') }}</th>
                        <th scope='col'>{{ __('messages.user_id') }}</th>
                        <th scope='col'>{{ __('messages.user_name') }}</th>                  
                        <th scope='col'>{{ __('messages.total_order') }}</th>
                        <th scope='col'>{{ __('messages.state') }}</th>    
                        <th scope='col'>{{ __('messages.show') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['orders'] as $order)
                        <tr>
                            <td>{{ $order->getId() }}</td>
                            <td>{{ $order->user->getId()}}</td>
                            <td>{{ $order->user->getLastName().' '. $order->user->getName() }}</td>
                            <td>{{ $order->getTotalOrder() }}</td>
                            <td>{{ $order->getstatus() }}</td>
                            
                            <td>
                                <a class='btn btn-primary' href='{{ route('admin.order.show', ['id' => $order->getId()]) }}'>
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