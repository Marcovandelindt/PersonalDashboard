<?php

namespace App\Models;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name',
        'hydration_percentage',
        'default_portion',
        'carbohydrate_grams',
        'sugars_grams',
        'caffeine_milligrams',
    ];
}
