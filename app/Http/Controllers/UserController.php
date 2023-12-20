<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;


class UserController extends Controller
{
    public function index()
{
    // Gets the current logged-in user object
    $user = Auth::user();

    // Get all users using Eloquent
    $users = User::paginate(10);

    // Pass data to the 'users.index' view using compact
    return view('users.index', compact('users', 'user'));
}
public function show($id)
{
    // Gets the current logged-in user object
    $user = Auth::user();

    // Get all users using Eloquent
    $user_data = User::find($id);

    // Pass data to the 'users.index' view using compact
    return view('users.show', compact('user_data', 'user'));
}
public function edit($id)
{
    // Gets the current logged-in user object
    $user = Auth::user();

    // Get all users using Eloquent
    $user_data = User::find($id);

    // Pass data to the 'users.index' view using compact
    return view('users.edit', compact('user_data', 'user'));
}
public function create(){
    // Gets the current logged-in user object
    $user = Auth::user();

    // Pass data to the 'users.index' view using compact
    return view('users.create');
}

public function store(Request $request) {
    // return $request->all();
    $validateData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',

    ]);

    $user = User::create($validateData);

    return redirect('/user/'.$user->id)->with('success', 'Success!');
}

//new method
public function update(Request $request, $id) {
    // return $request->all();
    $validateData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',

    ]);

    //$user = User::create($validateData);

    return redirect('/user/'.$user->id)->with('Success', 'Success!'); 
}
}