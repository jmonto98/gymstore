<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\View\View;
Use Iluminate\Http\RedirectResponse;
use Redirect;

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
        $order = Order::where('id', $id)->get();
        $items = Item::where('order_id', $id)->get();


        if (! $order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        $viewData['order'] = $order;
        $viewData['items'] = $items;

        return view('admin.order.show')->with('viewData', $viewData);
    }
}
