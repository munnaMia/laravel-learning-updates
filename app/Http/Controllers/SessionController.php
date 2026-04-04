<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class SessionController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth/login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'email' => ['required', 'string', 'max:255', 'email', 'unique:user'],
                'password' => ['required', 'min:8', Password::default()]
            ]
        );

        if (Auth::attempt($attributes)) {
            $request->session()->regenerate();

            return redirect('/ideas');
        }

        return back()->withErrors([
            'email' => 'provided cradintials are worng'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/ideas');
    }
}
