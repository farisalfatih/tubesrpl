<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dungeon of HTML</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <p class="navbar-brand" >Dungeon of HTML</p>
                <div class="d-flex">
                    @auth
                        <a href="edit" class="btn btn-sm btn-outline-secondary link-light">{{ auth()->user()->name }}</a>
                        <form action="/logout" method="post" class="ml-2">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Log Out</button>
                        </form>
                    @else
                        <a href="/login" class="btn btn-success">Log In</a>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="card text-center container container-score">
            <div class="card-header">
                Your Score
            </div>
            <div class="card-body">
                <h1 class="card-title">{{ $score }}</h1>
                <a href="/." class="btn btn-primary">Back to Menu</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>