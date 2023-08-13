<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
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
}
