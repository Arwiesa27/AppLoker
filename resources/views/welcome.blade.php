<html lang="eng">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
  </head>
  <body>
    <style>
        li {
            list-style: none;
        }
        li a {
            text-decoration-line: none;
        }
        li a i {
            color: white;
        }
        li a i:hover {
            color: blue;
        }
    </style>
    {{-- <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fa-solid fa-arrow-left"></i></a>
    </li> --}}
    <form action="/auth" method="post">
      @csrf
      <div class="card">
        <h2>LokerAlumni</h2>
        {{-- <img src="{{ asset('img/logo.png') }}" alt=""> --}}
        <input placeholder="Masukkan Email" type="email" name="email">
        <input placeholder="Masukkan Password" type="password" name="password">
        <input class="login" type="submit" value="Login">
        <p style="color: grey">Tidak punya akun ?
          <a class="mb-4" style="color: #0000ff; text-decoration-line: none" href="/register">Register</a>
        </p>
      </div>
    </form>
  </body>
</html>
