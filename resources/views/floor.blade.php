<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{!! $floor->title !!}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/floor.css') }}">
  <style>
    /* Gaya khusus untuk layar yang lebih kecil dari 1087px */
    @media only screen and (max-width: 1087px) {
      body {
        min-width: 634px;
      }
      
      .navbar-brand, .col-sm-4 {
        display: none;
      }
      .code {
        width: 100%; /* Set lebar konten menjadi 100% */
        }

      .row[class^="row"] {
          display: flex;
          flex-wrap: wrap;
          margin: 0px;
          margin-right: 1%;
          width: 98%;
      }

      .col-sm-8[class^="col-"] {
          flex: 0 0 100%;
          max-width: 100%;
          margin: 1%;
          margin-right: 3%;
          z-index: 0;
      }
      .navbar{
        width: 100%;
        position: sticky;
        top: 0px;
        z-index: 1;

      }
    }

    @media only screen and (max-width: 654px) {
      input, selec, option{
        width: 150px;
      }
    }
    

    /* Gaya khusus untuk layar yang lebih besar dari 1087px */
    @media only screen and (min-width: 1087px) {
      .collapse, .navbar-toggler {
        display: none;
      }
      
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a href= "/" class="navbar-brand mb-0 mr-auto">{!! $floor->judul_lantai !!}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!-- Isi Collapsible Navbar -->
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <a href="/" class="text-body-emphasis h4">{!! $floor->judul_lantai !!}</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Lihat Quest</button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark text-white">  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buatlah Tag HTML dengan Output</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{!! $floor->contoh_output !!}" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Alert -->
<div class="alert alert-custom" id="gameAlert">
  <span>{!! $floor->narasi_lantai !!}</span>
  <span class="close" onclick="closeAlert()">&times;</span>
</div>

<!-- Konten -->
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
        Selamat datang, Petualang! Tugas Anda adalah membuat tag table sederhana dengan output berikut:
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <img src="{!! $floor->contoh_output !!}" alt="Contoh">
        </blockquote>
      </div>
    </div>
  </div>

  <!-- Konten -->
  <div class="col-sm-8 code" >
    <form action="{{ route('submit_floor', ['id' => $floor->id]) }}" method="post">
      @csrf
      {!! $floor->from_code !!}
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Fungsi untuk menutup alert
  function closeAlert() {
    document.getElementById('gameAlert').style.display = 'none';
  }
</script>
</body>
</html>
