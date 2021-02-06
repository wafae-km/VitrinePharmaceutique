<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Repositories\OrderRepository;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout(Request $request)

    {
        $orders= Order::all();
        $total = $request->get('total');
        return view('checkout',['orders'=>$orders ,'total'=>$total]);
    }
    public function store(Request $request)
    {
        
    }

    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());

        dd($order);
    }
}
