<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $orders = [];
        if ($request->has('email') && $request->has('password')) {

            $user = User::where('email', $request->email)->get()->first();

            if (Hash::check($request->password, $user->password))
                $orders = Order::where('user_id', $user->id)->get();

        }

        return view('orders', compact('orders'));
    }
}
