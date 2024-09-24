<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];

        $productsInSession = $request->session()->get('products');
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }

        $viewData = [];
        $viewData['title'] = __('messages.cart');
        $viewData['subtitle'] = __('messages.shopping_cart');
        $viewData['total'] = $total;
        $viewData['products'] = $productsInCart;

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(Request $request, $id)
    {
        $products = $request->session()->get('products');
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);

        return redirect()->route('cart.index');
    }

    public function delete(Request $request)
    {
        $request->session()->forget('products');

        return back();
    }

    public function purchase(Request $request)
    {
        $viewData = [];
        $viewData['title'] = __('messages.purchase');
        $viewData['subtitle'] = __('messages.purchase_status');

        $productsInSession = $request->session()->get('products');
        $productsInCart = Product::findMany(array_keys($productsInSession));

        if ($productsInSession) {
            $user = Auth::user();

            $total = 0;
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
            $userBalance = $user->getBalance();


            if ($total > $userBalance) {
                $viewData['header'] = __('messages.transaction_rejected');
                $viewData['class'] = 'alert alert-danger';
                $viewData['message'] = __('messages.your_balance') .' ($'. $userBalance . ') ' . __('messages.is_less') .' ($'. $total .')';
            }
            else{

                $order = new Order;
                $order->setOrderDate(date(Carbon::now()));
                $order->setStatus('Aproved');
                $order->setTotalOrder(0);
                $order->setCusPayment('ADV543RE8');
                $order->setUserId($user->getId());
                $order->save();

                $total = 0;
               
                foreach ($productsInCart as $product) {
                    $quantity = $productsInSession[$product->getId()];
                    $item = new Item;
                    $item->setQuantity($quantity);
                    $item->setPrice($product->getPrice());
                    $item->setProductId($product->getId());
                    $item->setOrderId($order->getId());
                    $item->save();
                    $total = $total + ($product->getPrice() * $quantity);

                    $product->setStock($product->getStock() - $quantity);
                    $product->save();
                }
                $order->setTotalOrder($total);
                $order->save();

                $newBalance = $userBalance - $total;
                Auth::user()->setBalance($newBalance);
                Auth::user()->save();

                $request->session()->forget('products');

                
                $viewData['header'] = __('messages.purchase_completed');
                $viewData['class'] = 'alert alert-success';
                $viewData['message'] = __('messages.congratulations_purchase_completed') .' '.$order->getId();
            }
            return view('cart.purchase')->with('viewData', $viewData);
        } else {
            return redirect()->route('cart.index');
        }
    }
}
