<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

        return view('dbuser.trans-list', compact('orders'));
    }

    public function detail($id)
    {
        $order = Order::where('id', $id)->first();
        $order_details = [];
        $order_details = OrderDetail::where('order_id', $order->id)->get();

        return view('/home/orderdetail', compact('order', 'order_details'));
    }
}
