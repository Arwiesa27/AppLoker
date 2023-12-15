<html lang="eng">
  <head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <form action="/register/create" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card1">
        <h2>LokerAlumni</h2>
        {{-- <img src="{{ asset('img/logo.png') }}" alt=""> --}}
        <input placeholder="Masukkan NIP" type="number" name="nip">
        <input placeholder="Masukkan Nama" type="text" name="name">
        <input placeholder="Masukkan Email" type="email" name="email">
        <input placeholder="Masukkan Password" type="password" name="password">
        <input placeholder="Role" readonly type="text" name="role" value="alumni">
        <input class="register" type="submit" value="Register">
      </div>
    </form>
  </body>
</html>
