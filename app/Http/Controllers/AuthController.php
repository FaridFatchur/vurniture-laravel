<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('usn', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication passed
            // dd($request);
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->withErrors(['usn' => 'Invalid username or password.']);
        }
    }
}