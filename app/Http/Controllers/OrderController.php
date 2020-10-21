<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->paginate(10);

        return view('orders.index')->with('orders', $orders);
    }

    public function create()
    {
        $bids = Bid::all();

        return view('orders.create', [
            'bids' => $bids,
        ]);
    }

    public function store(Request $request)
    {
        try {
            Order::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('orders.index')->with('success','Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $bids = Bid::all();

        return view('orders.edit', [
            'order' => $order,
            'bids' => $bids,
        ]);
    }

    public function update(Request $request, Order $order)
    {
        try {
            $order->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('orders.index')->with('success','Order updated successfully');
    }

    public function destroy(Order $order)
    {
        try {
            $order->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('orders.index')->with('success','Order deleted successfully');
    }
}
