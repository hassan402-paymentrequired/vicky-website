<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateUserController extends Controller
{

    public function create()
    {
        return view("auth.login");
    }

    public function store(LoginRequest $request)
    { 
        if (Auth::attempt($request->validated())) {
            return redirect()->intended()->with('success', 'Logged in successfully');
        }
        return redirect()->back()->with('error', 'Invalid email or password');
    }
}
