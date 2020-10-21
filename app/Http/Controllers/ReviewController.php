<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'desc')->paginate(10);

        return view('reviews.index')->with('reviews', $reviews);
    }

    public function create()
    {
        $currentUserId = auth()->user()->id;

        return view('reviews.create', [
            'current_user_id' => $currentUserId,
        ]);
    }

    public function store(Request $request)
    {
        try {
            Review::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('reviews.index')->with('success','Review created successfully.');
    }

    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        try {
            $review->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('reviews.index')->with('success','Review updated successfully');
    }

    public function destroy(Review $review)
    {
        try {
            $review->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('reviews.index')->with('success','Review deleted successfully');
    }
}
