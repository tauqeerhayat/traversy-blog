<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=> 'required|min:3',
            'username' => 'required',
            'email'=> 'required|unique:users,email',
            'password'=> 'required|confirmed'
        ]);

        $user = User::create();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard')->with('success', 'User Successfully Registered');
    }
}
