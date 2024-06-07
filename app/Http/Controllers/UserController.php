<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        User::create($request->all());
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
    
    
}
