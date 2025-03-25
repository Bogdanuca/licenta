<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Vision</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
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

<body>
    <div class="page-wrapper">
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
                <div class="recognition-wrapper">
                    <div class="recognition-container">
                        <h2>Discover a new recipe</h2>
                        <form id="uploadForm" enctype="multipart/form-data">
                            @csrf
                            <label for="imageFile" class="custom-file-label">Choose Image</label>
                            <input type="file" id="imageFile" name="file" accept="image/*" required
                                style="display: none;">
                            <span id="file-name" style="display:block; margin-top:10px; color:#000;"></span>
                            <br><br>
                            <button type="submit">Find the recipe</button>
                        </form>
                        <div id="result"></div>
                        <div id="loading" style="display: none; margin-top: 20px;">
                            <div class="spinner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                &copy; 2025 Taste Vision &middot; All rights reserved
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/recognition.js') }}"></script>
</body>

</html>