<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {

        // Validate order
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'student_id' => 'required',
        ]);

        // Store the order
        $order = Order::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'student_id' => $request->student_id,
            'status' => 'pending',
            'total' => Cart::totalAmount(),
        ]);

        foreach(session()->get('cart') as $item)
        {
            $order->items()->create([
                'product_id' => $item['product']['id'],
                'color_id' => $item['color']['id'],
                'quantity' => $item['quantity'],
            ]);
        }

        session()->forget('cart');

        return view('pages.orderSuccess', ['order' => $order]);

    }

    

}
