<?php

namespace App\Http\Controllers;


use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function login()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.']);

        //return back()
        //  ->withInput()
        //  ->withErrors(['email' => 'Your provided credentials could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
