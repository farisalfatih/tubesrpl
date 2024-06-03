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

        <div class="container text-center">
            <div class="row lantai">
                <div class="col-8">
                    <p class="lead">
                        Seluruh dunia terkejut oleh munculnya dungeon misterius. Di tengah ketidakpastian, seorang pahlawan HTML bernama Naraxis berani tampil ke depan. Dia memulai perjalanan epik sendirian, siap menghadapi tantangan dalam dungeon yang penuh bahaya dan keajaiban.
                    </p>
                    <p class="lead">
                        Selamat datang, petualang HTML! Bersiaplah memasuki dunia "Dungeon of HTML." Kendalikan pahlawan kita, Naraxis, dalam petualangan melalui dungeon penuh teka-teki HTML dan pertarungan seru. Bersama Naraxis, mari selamatkan dunia dari ancaman misterius ini! Apakah kamu siap untuk bergabung? Mari kita mulai perjalanan legendaris ini!
                    </p>
                    <a class="btn btn-primary btn-lg" href="floor1" role="button">Mulai Petualangan</a>
                </div>
                <div class="col-4">
                    <div class="row row-cols-1">
                        <a href="floor1" class="col">Lantai 1: Enchanted Tags Maze</a>
                        <a href="floor2" class="col">Lantai 2: Table Quest of HTML Knights</a>
                        <a href="floor3" class="col">Lantai 3: Form Challenge Arena</a>
                        <a href="floor4" class="col">Lantai 4: Integration Tower</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>