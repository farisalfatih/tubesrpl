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
        }
        .navbar {
            margin-bottom: 30px;
        }
        .host {
            width: 100%;
            max-width: 300px;
            display: block;
        }
        .card-custom {
            background-color: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        .list-group-item {
            background-color: #2c2c2c;
            color: #e0e0e0;
        }
        .list-group-item-action:hover {
            background-color: #383838;
        }
        .footer {
            background-color: #343a40;
            color: #e0e0e0;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .lantai {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .lantai .content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .image-and-list {
            display: flex;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .list {
            margin-left: 20px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .lantai {
                flex-direction: column;
            }
            .image-and-list {
                flex-direction: column;
                align-items: center;
            }
            .list {
                margin-left: 0;
                margin-top: 20px;
            }
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
