<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post"> 
        @csrf
        <div class="form-floating">
          <select class="form-control" id="role" name="role" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Select Role" required value="{{ old('name') }}">
              <option>Select Role</option>
              <option value="dosen">Dosen</option>
              <option value="mahasiswa">Mahasiswa</option>
          </select>
          <label for="role">Register as</label>
          @error('role')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
    </div>

    <script>
        function showSignupForm(role) {
            var dosenForm = document.getElementById('dosen-form');
            var mahasiswaForm = document.getElementById('mahasiswa-form');

            if (role === 'dosen') {
                dosenForm.style.display = 'block';
                mahasiswaForm.style.display = 'none';
            } else if (role === 'mahasiswa') {
                dosenForm.style.display = 'none';
                mahasiswaForm.style.display = 'block';
            } else {
                dosenForm.style.display = 'none';
                mahasiswaForm.style.display = 'none';
            }
        }
    </script>

    <!-- External Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>