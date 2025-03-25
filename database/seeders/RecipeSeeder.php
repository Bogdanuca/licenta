<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        $recipes = [
            [
                'title' => 'Apple Pie',
                'slug' => 'apple_pie',
                'description' => 'Homemade pie with flaky crust and sweet apples.',
                'ingredients' => json_encode(['2 cups flour', '5 apples', '1/2 cup sugar', '1 tsp cinnamon']),
                'steps' => json_encode([
                    'Prepare the crust with flour and butter.',
                    'Slice the apples and mix with sugar and cinnamon.',
                    'Place apples in crust, cover with top crust.',
                    'Bake at 180°C for 45 minutes.'
                ]),
                'image_path' => 'images/recipes/apple-pie.jpg'
            ],
            [
                'title' => 'Chicken Curry',
                'slug' => 'chicken_curry',
                'description' => 'A spicy and savory Indian-style chicken curry.',
                'ingredients' => json_encode(['Chicken breast', 'Onion', 'Tomato', 'Curry powder', 'Coconut milk']),
                'steps' => json_encode([
                    'Sauté onions and spices.',
                    'Add chicken and brown evenly.',
                    'Add tomatoes and coconut milk, simmer until done.',
                ]),
                'image_path' => 'images/recipes/chicken-curry.jpg'
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}