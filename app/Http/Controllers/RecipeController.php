<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function show($slug)
{
    $recipe = Recipe::where('slug', $slug)->firstOrFail();
    if (!$recipe) {
        dd("Recipe with slug '{$slug}' not found.");
    }
    return view('recipe', compact('recipe'));
}
}