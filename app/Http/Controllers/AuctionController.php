<?php

namespace App\Http\Controllers;

use App\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    public function index()
    {
        $lots = Lot::where('end_time_at', '>', DB::raw('CURRENT_TIMESTAMP'))
            ->orderBy('id', 'desc')
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
