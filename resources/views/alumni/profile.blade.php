<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
  <title>Profile</title>
</head>
<body>
  <div class="card">
    <img src="{{ asset('img/profile.svg') }}" alt="">
    <div class="right">
      <h2>PROFILE</h2>
      <h4>NIS</h4>
      <p>121212</p>
      <h4>NAMA LENGKAP</h4>
      <p>Arya Wira Saputra</p>
      <h4>EMAIL</h4>
      <p>arya@gmail.com</p>
      <h4>PASSWORD</h4>
      <p>*****</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Edit
      </button>
    </div>
  </div>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
