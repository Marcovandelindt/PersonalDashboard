<?php

namespace App\Http\Controllers\WaterIntake;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class WaterIntakeController extends Controller
{
    /**
     * Show the water intake view
     *
     * @returns View
     */
    public function index(): View
    {
        $title = 'Water Intake';

        return view('water-intake.index')->with([
            'title' => $title,
        ]);
    }
}
