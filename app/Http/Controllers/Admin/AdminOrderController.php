<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
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
        $order = Order::with(['items.product'])->where('id', $id)->first();

        if (! $order) {
            return redirect()->back()->with('error', 'Order not found');
        }

        $orderDetails = $order->items->map(function ($item) {
            return [
                'product_name' => $item->product->name,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ];
        });

        $viewData['orderDetails'] = $orderDetails;
        $viewData['order'] = $order;

        // $viewData['orders'] = Order::findOrFail($id)->get();
        // $viewData['product'] = Product::all();
        // $viewData['item'] = Item::all();

        return view('admin.order.show')->with('viewData', $viewData);
    }
}
