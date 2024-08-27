<?php

namespace App\Http\Controllers;

use App\Models\Wp\WCOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        $orders = WCOrder::with('orderLines.orderLineMeta')->specialOrder()->paginate(10);

        dd($orders);
        return view('orders', ['orders' => $orders]);
    }

    public function getSpecialOrders(){
        $orders = WCOrder::where('total', '>', 100)->get();
        return view('orders', ['orders' => $orders]);
    }
}
