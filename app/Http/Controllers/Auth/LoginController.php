<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Return the login view
     *
     * @returns View
     */
    public function index(): View
    {
        $title = 'Login';

        return view('auth.login')->with([
            'title' => $title,
        ]);
    }

    /**
     * Attempt to log the user in
     *
     * @returns RedirectResponse
     */
    public function attempt(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Try to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        // Redirect user back if login fails
        return redirect()->back()->with([
            'error' => 'Those credentials didn\'t match, please try again.',
        ]);
    }
}
