<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Vision - Find a Recipe</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    .background-image {
        background-image: url("{{ asset('images/main_page.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 100vh;
        flex: 1;
    }
    </style>
</head>

<body>
    <div class="background-image">
        <div class="off-screen-menu">
            <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="{{ route('recognition') }}">RECOGNITION</a></li>
                <li><a href="{{ route('database') }}">FIND A RECIPE</a></li>
                <li><a href="{{ route('about') }}">ABOUT</a></li>
                <li><a href="{{ route('account') }}">ACCOUNT</a></li>
                <li><a href="{{ route('details') }}">DETAILS</a></li>
            </ul>
        </div>
        <nav>
            <div class="ham-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
                </a>
            </div>
        </nav>

        <div id="recipe-card" class="recipe-card">
            <img id="recipe-image" src="" alt="Recipe Image">
            <div class="card-content">
                <h3 id="recipe-title"></h3>
                <p id="recipe-description"></p>
                <a id="recipe-link" href="#">View Recipe</a>
            </div>
        </div>

        <button class="next-button" onclick="showNextRecipe()">Next Recipe</button>

        <script>
        window.recipesFromBlade = @json($recipes);
        </script>
        <script src="{{ asset('js/card.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>

</html>