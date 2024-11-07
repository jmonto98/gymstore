<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Item;
use Illuminate\View\View;

class AdminOrderController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.order');
        $viewData['subtitle'] = __('messages.list_of_orders');
        $viewData['orders'] = Order::with('user')->get();

        return view('admin.order.index')->with('viewData', $viewData);
    }

    public function show($id): View
    {
        $viewData = [];
        $viewData['title'] = __('messages.order');
        $viewData['subtitle'] = __('messages.show_order');
        $viewData['orders'] = Order::findOrFail($id);
        $viewData['items'] = Item::with('order')->get();
        $viewData['products'] = Item::with('product')->get();

        return view('admin.order.show')->with('viewData', $viewData);
    }
}
