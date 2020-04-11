<?php

namespace App\Http\Controllers;

use App\Bid;
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
        return view('bids.create');
    }

    /**
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           Bid::create($request->all());
       } catch (\Exception $e) {
           dd($e);
       }



        return redirect()->route('bid.index')
            ->with('success','Bid created successfully.');
    }

    /**
     * @param  Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        return view('bids.show', compact('bid'));
    }

    /**
     * @param  Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        return view('bids.edit', compact('bid'));
    }

    /**
     * @param  Request $request
     * @param  Bid $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $bid->update($request->all());

        return redirect()->route('bids.index')
            ->with('success','Bid updated successfully');
    }

    /**
     * @param  Bid $bid
     * @return \Illuminate\Http\Response
     */
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
