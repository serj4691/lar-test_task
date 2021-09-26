<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Courier;
use Carbon;

class OrderController extends Controller
{
    public function list_orders() {
        $orders = Order::all();

        return view('orders', compact('orders'));
    }

    public function order_info($id) {
        $order = Order::where(['id' => $id])->first();
       
        return view('order_info', compact('order'));
    }

    public function order_edit($id) {
        $order = Order::where(['id' => $id])->first();
        $users = Courier::all();
        
        return view('order_edit', compact('order', 'users'));
    }

    public function edit_save(Request $request) {
        $id = $request->order_id;
        $order = Order::where(['id' => $id])->first();
        $order->description = $request->description;
        $order->appointment = $request->appointment;
        $order->price = $request->price;
        $order->finished_at = $request->finished_at;
        $order->courier_id = $request->user;

        $order->save();
        return redirect()->route('list_orders');
    }

    public function create_order() {
        $users = Courier::all();
        return view('create_order', compact('users'));
    }

    public function new_save(Request $request) {
        Order::create([
            'published_at' => $request->begin,
            'description' => $request->description,
            'finished_at' => $request->finish,
            'appointment' => $request->appointment,
            'price' => $request->price,
            'courier_id' => $request->user,
        ]);
        
        return redirect()->route('list_orders');
    }
}
