<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Category;
use App\Level;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index()
    {
        $bids = Bid::orderBy('id', 'desc')
            ->paginate(10);

        return view('bids.index')->with('bids', $bids);
    }

    public function create()
    {
        $currentUserId = auth()->user()->id;
        $levels = Level::all();
        $categories = Category::all();

        return view('bids.create', [
            'levels' => $levels,
            'categories' => $categories,
            'current_user_id' => $currentUserId,
        ]);
    }

    public function store(Request $request)
    {
        try {
            Bid::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('bids.index')
            ->with('success','Bid created successfully.');
    }

    public function show(Bid $bid)
    {
        return view('bids.show', compact('bid'));
    }

    public function edit(Bid $bid)
    {
        $levels = Level::all();
        $categories = Category::all();

        return view('bids.edit', [
            'bid' => $bid,
            'levels' => $levels,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Bid $bid)
    {
        try {
            $bid->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('bids.index')
            ->with('success','Bid updated successfully');
    }

    public function destroy(Bid $bid)
    {
        try {
            $bid->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('bids.index')
            ->with('success','Bid deleted successfully');
    }
}
