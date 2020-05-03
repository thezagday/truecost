<?php

namespace App\Http\Controllers;

use App\Lot;
use App\Order;
use App\User;
use Carbon\Carbon;
use DateInterval;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
        $lots = Lot::orderBy('id', 'desc')
            ->paginate(10);

        return view('lots.index')->with('lots', $lots);
    }

    public function create()
    {
        $orders = Order::all();
        $users = User::all();

        return view('lots.create', [
            'orders' => $orders,
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $lot = Lot::create($request->all());
            $lot->end_time_at = (new Carbon($lot->created_at))->addHours($request->duration);
            $lot->save();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('lots.index')
            ->with('success','Lot created successfully.');
    }

    public function show(Lot $lot)
    {
        return view('lots.show', compact('lot'));
    }

    public function edit(Lot $lot)
    {
        $orders = Order::all();
        $users = User::all();

        return view('lots.edit', [
            'lot' => $lot,
            'orders' => $orders,
            'users' => $users,
        ]);
    }

    public function update(Request $request, Lot $lot)
    {
        try {
            $lot->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('lots.index')
            ->with('success','Lot updated successfully');
    }

    public function destroy(Lot $lot)
    {
        try {
            $lot->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('lots.index')
            ->with('success','Lot deleted successfully');
    }
}
