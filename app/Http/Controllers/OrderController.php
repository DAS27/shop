<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderCreated;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function store(OrderRequest $request)
    {
        $validatedData = $request->validated();

        $order = new Order();
        $order->saveOrder($validatedData);
        flash('Order created successfully')->success();
        Mail::to('sarkulindamir@gmail.com')->send(new OrderCreated($validatedData));

        return redirect()->route('product.index');
    }
}
