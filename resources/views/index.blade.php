<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste-Vision Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
.background-image {
    background-image: url("{{ asset('images/main_page.jpg') }}");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
}
</style>

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
        <div class="under-nav">
            <div class="text-overlay">
                <h1>Need help finding a recipe?</h1>
                <p>Upload a dish photo!</p>
                <a href="{{ route('recognition') }}" class="home_button">Try it now</a>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Taste Vision &middot; All rights reserved
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>