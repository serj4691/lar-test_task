<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Courier;
use App\models\Order;

class CourierController extends Controller
{
    public function list_couriers() {
        $users = Courier::all();
        return view('list', compact('users'));
    }

    public function list_free() {
        $users = Courier::where(['status' => 0,])->get();
        return view('list', compact('users'));
    }

    public function list_tasks($id) {
        $users = Courier::where(['id' => $id,])->first();
        $orders = Order::where(['courier_id' => $id])->get();
        return view('account', compact('users', 'orders'));
    }
}
