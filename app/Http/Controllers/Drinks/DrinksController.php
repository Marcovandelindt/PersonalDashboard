<?php

namespace App\Http\Controllers\Drinks;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class DrinksController extends Controller
{
    /**
     * Return the drinks view
     *
     * @returns View
     */
    public function index(): View
    {
        $title = 'Drinks';

        return view('drinks.index')->with([
            'title' => $title,
        ]);
    }
}
