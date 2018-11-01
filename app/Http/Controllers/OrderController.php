<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class OrderController extends Controller
{


    public function Orders($type=''){




        if ($type == 'pending') {

            $orders = Order::where('delivered', '0')->get();

        } elseif ($type == 'delivered'){
            $orders= Order::where('delivered','1')->get();
        }else{
            $orders=Order::all();
        }

        return view('admin.orders',compact('orders'));
        }
        public function toggledeliver(Request $request,$orderId)
        {
            $order= Order::find($orderId);
            if ($request->has('delivered')) {

                Mail::to($request->user())->send(new OrderShipped($order));


                $order->delivered = $request->delivered;
            }else{
                $order->delivered="0";
            }
            $order->save();
            return back();
        }

}
