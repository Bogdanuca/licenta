<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class DatabaseController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('database', compact('recipes'));
    }
}