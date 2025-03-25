<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }} - Taste Vision</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
.background-image {
    background-image: url("{{ asset('images/main_page.jpg') }}");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 100vh;
}

.recipe-detail {
    background-color: rgb(255, 255, 255);
    margin: 100px auto;
    padding: 40px;
    border-radius: 16px;
    max-width: 800px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    color: #000;
}

.recipe-detail img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}

.recipe-detail h1 {
    font-size: 2.5rem;
    color: #efb832;
    margin-bottom: 0px;
}

.recipe-detail h2 {
    margin-top: 30px;
    font-size: 1.8rem;
    color: #000;
    border-bottom: 2px solid #efb832;
    padding-bottom: 5px;
}

.recipe-detail p,
.recipe-detail ul,
.recipe-detail ol {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-top: 10px;
}
</style>

<body>
    <div class="background-image">
        <div class="off-screen-menu">
            <ul>
                <li><a href="{{ route('home') }}">HOME</a></li>
                <li><a href="{{ route('recognition') }}">RECOGNITION</a></li>
                <li><a href="{{ route('database') }}">DATABASE</a></li>
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

        <div class="recipe-detail">
            <h1>{{ $recipe->title }}</h1>
            <img src="{{ asset($recipe->image_path) }}" alt="{{ $recipe->title }}">
            <p>{{ $recipe->description }}</p>

            <h2>Ingredients</h2>
            <ul>
                @foreach(explode("\n", $recipe->ingredients) as $ingredient)
                <li>{{ $ingredient }}</li>
                @endforeach
            </ul>

            <h2>Steps</h2>
            <ol>
                @foreach(explode("\n", $recipe->steps) as $step)
                <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>
    </div>
    <footer>
        &copy; 2025 Taste Vision &middot; All rights reserved
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>