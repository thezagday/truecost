<?php

namespace App\Http\Controllers;

use App\Lot;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $lots = Lot::orderBy('id', 'desc')
            ->paginate(10);

        return view('auction.index')->with('lots', $lots);
    }

    public function show(Lot $lot)
    {
        return view('auction.show_lot', compact('lot'));
    }

    public function reducePrice(Request $request, Lot $lot)
    {
        $lot->current_cost = $request->offer;
        $lot->save();

        return redirect()->route('auction.index');
    }
}
