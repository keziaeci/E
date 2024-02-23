<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    function index() {
        return view('pages.login');
    }

    function create() {
        return view('pages.register');
    }

    function store(StoreRegisterRequest $request)  {
        $request->validated();

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => User::ROLE['User']
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat!');
    }

    function authenticate(AuthLoginRequest $request) {
        $credentials = $request->validated();
        
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
            
            return redirect()->route('bukus');
        }
        
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput(['error']);
    }
    
    function logout(Request $request) {
        // dd($request);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
