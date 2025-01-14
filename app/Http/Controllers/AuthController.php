<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    // Store (Register or Login)
    public function store(Request $request)
    {
        if ($request->has('register')) {
            // Register logic
            $res = $request->validate([
                'username' => 'required|unique:users,username',
                'password' => 'required',
            ]);

            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user); // Auto-login after registration
            return redirect()->route('pembelian.index')->with('success', 'Registrasi berhasil!');
        } else {
            // Login logic
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            $user = User::where('username', $request->username)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->route('pembelian.index')->with('success', 'Registrasi berhasil!');
            }

            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    // Show (Get logged-in user)
    public function show($id)
    {
        if (Auth::check() && Auth::id() == $id) {
            return response()->json(['user' => Auth::user()]);
        }

        return response()->json(['message' => 'No user is logged in or unauthorized access'], 401);
    }
}
