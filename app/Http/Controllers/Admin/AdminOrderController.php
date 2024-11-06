<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\View\View;

class AdminOrderController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.order');
        $viewData['subtitle'] = __('messages.list_of_orders');
        $viewData['orders'] = Order::with('user')->get();
        $orders = Order::all();
        $uniqueStatuses = $orders->pluck('status')->unique();
        $viewData['statuses'] = $uniqueStatuses;

        return view('admin.order.index')->with('viewData', $viewData);
    }
}
