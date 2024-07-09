<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }
    // public function index()
    // {
    //     // Your logic here
    //     return view('users.index');
    // }
    public function showForm()
    {
        $users = User::all();
        return view('form', ['users' => $users]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'description' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->description = $request->description;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect()->route('user.index')->with('message', 'Your Form Submitted Successfully');
    }
  

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->description = $request->input('description');
        $user->status = $request->input('status');
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'description' => 'nullable|string',
        'status' => 'nullable|string',
    ]);

    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = Hash::make($validatedData['password']); // Hash the password
    $user->description = $validatedData['description'];
    $user->status = $validatedData['status'];
    $user->save();
    return redirect()->back()->with('success', 'User data store successfully');

}
    public function remove($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Data Deleted Successfully');
    }
}
