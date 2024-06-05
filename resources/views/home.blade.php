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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mr-4" href="/dosen-dashboard">Dungeon of HTML</a>
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

    <div class="container d-flex justify-content-center align-items-center text-center my-5">
        <div class="lantai w-100">
            <div class="card-custom">
                <div class="content">
                    <div class="text">
                        <p>
                            Selamat datang @auth {{ auth()->user()->name }}, @else petualang HTML!, @endauth Bersiaplah memasuki dunia fantasi yang luar biasa dengan game "Dungeon of HTML." Kamu akan mengendalikan pahlawan terkuat kami, Naraxis, dalam perjalanan epik melalui dungeon misterius yang penuh dengan teka-teki HTML dan pertarungan seru!
                        </p>
                        <a class="btn btn-primary btn-lg" href="floor1" role="button">Play</a>
                    </div>
                    <div class="image-and-list">
                        <img class="host d-none d-md-block" src="img/host.png" alt="Host Image">
                        <div class="list">
                            <div class="list-group w-100">
                                <a href="floor1" class="list-group-item list-group-item-action">Lantai 1: Enchanted Tags Maze</a>
                                <a href="floor2" class="list-group-item list-group-item-action">Lantai 2: Table Quest of HTML Knights</a>
                                <a href="floor3" class="list-group-item list-group-item-action">Lantai 3: Form Challenge Arena</a>
                                <a href="floor4" class="list-group-item list-group-item-action">Lantai 4: Integration Tower</a>
                            </div>
                        </div>
                    </div>
                </div>
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
