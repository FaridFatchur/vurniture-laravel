<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;



class OrderController extends Controller
{
    public function index($id)
    {
        $product = Product::where('id', $id)->first();
        // $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // $cart = OrderDetail::where('order_id', $order->id)->count();

        return view('/home/productdetail', compact('product'));
    }

    public function Product(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        
        $date = Carbon::now();

        // validate product stock
        $order_detail = OrderDetail::find($id);

        if($request->order_qty > $product->quantity) {
            // Alert::error('Failed', 'Failed to add product to cart. Check the available stok.');
            // return redirect('/vurniture/home');
            return redirect('/vurniture/failed_to_add');
        }

        // validate orders
        $check_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        
        // database orders
        if(empty($check_order)) {
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->date = $date;
            $order->status = 0;
            $order->total = 0;
            $order->save();
        }

        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // add new product to cart
        $check_order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();

        // database order_details
        if(empty($check_order_detail)) {
            $order_detail = new OrderDetail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $new_order->id;
            $order_detail->product_qty = $request->order_qty;
            $order_detail->total = $product->price * $request->order_qty;
            $order_detail->save();
        } else {
            $order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
            $order_detail->product_qty = $order_detail->product_qty + $request->order_qty;

            $new_order_detail_price = $product->price * $request->order_qty;
            $order_detail->total = $order_detail->total + $new_order_detail_price;
            $order_detail->update();
        }

        // total order
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->total = $order->total + ($product->price * $request->order_qty);
        $order->update();
        
        // Alert::success('Success', 'Product successfully added to cart. Check your cart.');
        // return redirect('/vurniture/home');
        return redirect('/vurniture/successfully_added');
    }

    public function orders()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order_details = [];
        
        if(!empty($order)) {
            $order_details = OrderDetail::where('order_id', $order->id)->get();
        }

        return view('/web/order', compact('order', 'order_details'));
    }

    public function delete($id)
    {
        $order_detail = OrderDetail::where('id', $id)->first();

        $order = Order::where('id', $order_detail->order_id)->first();
        $order->total = $order->total - $order_detail->total;
        $order->update();

        $order_detail->delete();

        // Alert::error('Success', 'Product successfully removed from cart. Check your cart.');
        // return redirect('/vurniture/home');

        return redirect('/vurniture/removed_from_cart');
    }

    public function confirm()
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $order_id = $order->id;

        $order->status = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order_id)->get();

        foreach ($order_details as $order_detail) {
            $product = Product::where('id', $order_detail->product_id)->first();
            $product->quantity = $product->quantity - $order_detail->product_qty;
            $product->update();
        }

        return redirect('/vurniture/checkout_success');
    }
}
