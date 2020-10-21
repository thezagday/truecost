<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::orderBy('id', 'desc')->paginate(10);

        return view('levels.index')->with('levels', $levels);
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        try {
            Level::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('levels.index')->with('success','Level created successfully.');
    }

    public function show(Level $level)
    {
        return view('levels.show', compact('level'));
    }

    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        try {
            $level->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('levels.index')->with('success','Level updated successfully');
    }

    public function destroy(Level $level)
    {
        try {
            $level->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('levels.index')->with('success','Level deleted successfully');
    }
}
