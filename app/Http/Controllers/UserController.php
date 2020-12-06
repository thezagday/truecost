<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            User::create($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('users.index')->with('success','User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $user->update($request->all());
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('users.index')->with('success','User updated successfully');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}
