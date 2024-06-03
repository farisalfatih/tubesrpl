<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      {!! $floor->title !!}
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/floor.css') }}">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <p class="navbar-brand">
          {!! $floor->judul_lantai !!}
        </p>
        <form class="d-flex" role="search">
          <a href="/" class="btn btn-primary">Menu</a>
        </form>
      </div>
    </nav>

    <div class="alert alert-custom" id="gameAlert">
      <span>
        {!! $floor->narasi_lantai !!}
      </span>
      <span class="close" onclick="closeAlert()">&times;</span>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
        <div class="card-header">
          Selamat datang, Petualang! Tugas Anda adalah membuat tag table sederhana dengan output berikut:
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            {!! $floor->contoh_output !!}
          </blockquote>
        </div>
        </div>
      </div>

      <div class="col-sm-8 code">
        <div>
          <form action="{{ route('submit_floor', ['id' => $floor->id]) }}" method="post">
            @csrf
            {!! $floor->from_code !!}
          </form>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function closeAlert() {
      document.getElementById('gameAlert').style.display = 'none';
    }
</script>
  </body>
</html>