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
                    {{-- <a href="{{ route('edit', auth()->user()) }}" class="btn btn-sm btn-outline-secondary link-light">{{ auth()->user()->name }}</a> --}}
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

  <div class="container container-edit">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <h1 class="card-header text-center">Edit User</h1>

                  <div class="card-body">
                      {{-- <form method="POST" action="{{ route('update', $user) }}"> --}}
                          @csrf
                          @method('PUT')

                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" id="name" class="form-control" value="">
                              {{-- {{ old('name', $user->name) }} --}}
                          </div>

                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" id="email" class="form-control" value="">
                              {{-- {{ old('email', $user->email) }} --}}
                          </div>

                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" id="username" class="form-control" value="">
                              {{-- {{ old('username', $user->username) }} --}}
                          </div>

                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                          </div>

                          <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>