<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Return the home view
     *
     * @returns View
     */
    public function index(): View
    {
        $title = 'Home';

        return view('home.index')->with([
            'title' => $title,
        ]);
    }
}
