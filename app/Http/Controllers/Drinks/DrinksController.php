<?php

namespace App\Http\Controllers\Drinks;

use App\Models\Drink;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

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
        $drinks = Drink::all();

        return view('drinks.index')->with([
            'title' => $title,
            'drinks' => $drinks,
        ]);
    }

    /**
     * Create a new drink view
     *
     * @returns View
     */
    public function create(): View
    {
        $title = 'Create new drink';

        return view('drinks.create')->with([
            'title' => $title,
        ]);
    }

    /**
     * Store a new drink
     *
     * @param Request $request
     *
     * @returns RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Check the required fields
        $request->validate([
            'name' => 'required',
            'hydration_percentage' => 'required',
        ]);

        // Check if no drink exists with this name
        $drinkExists = Drink::where('name', $request->name)->first();

        if (!$drinkExists) {
            $drink = new Drink();
            $drink->name = $request->name;
            $drink->hydration_percentage = $request->hydration_percentage;
            $drink->default_portion = $request->default_portion;
            $drink->carbohydrate_grams = $request->carbohydrate_grams;
            $drink->sugars_grams = $request->sugars_grams;
            $drink->caffeine_milligrams = $request->caffeine_milligrams;

            $drink->save();

            return redirect()->route('drinks.index')->with([
                'success' => 'Drink has successfully been added!',
            ]);
        }

        return redirect()->back()->with([
            'error' => 'A drink with this name already exists',
        ]);
    }
}
