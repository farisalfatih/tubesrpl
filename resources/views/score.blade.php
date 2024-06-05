<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dungeon of HTML</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <style>
    </style>
</head>
<body class="body-score">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-4" href="/">Dungeon of HTML</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @auth
                                {{ auth()->user()->username }}
                            @else
                                User Actions
                            @endauth
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            @auth
                                <form action="/logout" method="post" class="dropdown-item">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-danger" >Log Out</button>
                                </form>
                            @else
                                <a class="dropdown-item text-success font-weight-bold" href="/login">Log In</a>
                            @endauth
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-center">
        <div class="card text-center container-score">
            <div class="card-header">
                Your Score
            </div>
            <div class="card-body">
                <h1 class="card-title">{{ $score }}</h1>
                <a href="/." class="btn btn-primary">Back to Menu</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span>Info Gresik &copy; 2024</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
