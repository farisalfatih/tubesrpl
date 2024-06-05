<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dungeon of HTML</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            margin-bottom: 30px;
        }
        .container-score {
            background-color: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 100%;
            max-width: 700px;
            margin-top: 0px;
        }
        .card-header {
            background-color: #343a40;
            color: #e0e0e0;
            font-size: 1.5rem;
            border-bottom: none;
        }
        .card-title {
            font-size: 3.5rem;
            color: #ffc107;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
            padding: 10px 20px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer {
            background-color: #343a40;
            color: #e0e0e0;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
        }
        .container-center {
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            flex-grow: 1;
            padding-top: 60px; 
            padding-bottom: 40px; 
        }
    </style>
</head>
<body>
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
                                <a class="dropdown-item font-weight-bold text-danger" href="/logout">Log Out</a>
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
