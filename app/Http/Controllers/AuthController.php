<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }
    public function register(Request $rq){
        $validate = $rq->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);

        Auth::login($user);

        return redirect('login');
    }


    public function showLoginForm() {
        return view('auth.login');
    }


public function login(Request $rq)
{
    $rq->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt login
    if (Auth::attempt($rq->only('email', 'password'))) {

        $user = Auth::user();

        // Admin redirect
        if ($user->email === 'admin@gmail.com') {
            return redirect()->route('dashboard')
                             ->with('success', 'Welcome Admin!');
        }else{
            // Normal user
        return redirect()->route('home')
                         ->with('success', 'Logged in successfully!')
                         ->with('user', $user); // ✅ FIX HERE
        }
    }

    return back()
        ->withErrors(['email' => 'Invalid email or password.'])
        ->withInput();
}

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}