<?php

namespace App\Http\Controllers;

use App\Lot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $lots = Lot::where('end_time_at', '>', Carbon::now())->orderBy('id', 'desc')->paginate(10);

        return view('auction.index')->with('lots', $lots);
    }

    public function show(Lot $lot)
    {
        return view('auction.show_lot', compact('lot'));
    }

    public function reducePrice(Request $request, Lot $lot)
    {
        $lot->current_cost = $request->offer;
        $lot->candidate_id = auth()->user()->id;
        $lot->save();

        return redirect()->route('auction.index');
    }
}
