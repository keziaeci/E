<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

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
            
            activity()
            ->event('login')
            ->log(Auth::getUser()->name . ' has logged in');
            return redirect()->route('bukus');
        }
        
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    function redirect() {
        return Socialite::driver('google')->redirect();
    }

    function googleCallback() {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id',$user->id)->first();
            
            if ($findUser) {
                Auth::login($findUser);
                activity()
                ->event('login')
                ->log(Auth::getUser()->name . ' has logged in');
                return redirect('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => strtolower(str_replace(' ', '', $user->name)),
                    'email' => $user->email,
                    'password' => null,
                    'role' => User::ROLE['User'],
                    'google_id' => $user->id,
                    'social_type' => 'google'
                ]);

                Auth::login($newUser);
                activity()
                ->event('login')
                ->log(Auth::getUser()->name . ' has logged in');
                return redirect()->route('bukus');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    function logout(Request $request) {
        // dd($request);
        activity()
        ->event('logout')
        ->log(Auth::getUser()->name . ' has logged out');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
