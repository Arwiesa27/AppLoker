<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - DataLoker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul style="background-color: #0000ff" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                DATA
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/dataAlumni">
                    <i class="fas fa-fw fa-people-group"></i>
                    <span>Alumni</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dataLoker">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Lowongan</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                MORE
            </div>
            <li class="nav-item">
                <a class="nav-link" href="/kontak">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Kontak</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h3 class="text-dark mt-2">LokerAlumni</h3>
                    <li style="list-style: none;right: 0;position:absolute;color:blue" class="nav-item active">
                        <a class="nav-link" href="/login">
                            <span>Logout</span>&ensp;
                            <i class="fa-solid fa-sign-out"></i></a>
                    </li>
                </nav>
                <div class="container-fluid">
                    <div class="row">
                        <table id="example" class="hover mt-3" style="width:100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Data Pengaju</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Persyaratan</th>
                                    <th>Tanggal Buka</th>
                                    <th>Tanggal Tutup</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lokers as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name}}<br>
                                        {{ $item->nohp }}
                                    </td>
                                    <td>{{ $item->namaP }}</td>
                                    <td>{{ $item->posisi }}</td>
                                    <td>{{ $item->persyaratan }}</td>
                                    <td>{{ $item->tglbuka }}</td>
                                    <td>{{ $item->tgltutup }}</td>
                                    <td>

                                        <img src="/storage/{{ $item->fotolowongan }}" alt="image" width="50" height="50"></td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="loker/hapus/{{ $item->id }}"><i style="color: #ff0000" class="fas fa-trash"></i></a>
                                        <i class="fas fa-edit" style="color: #0000ff" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"></i>
                                    </td>
                                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <style>
                                                        .submit1 {
                                                            border: none;
                                                            padding: 7px;
                                                            width: 75px;
                                                            border-radius: 7px;
                                                            color: white;
                                                            background-color: blue;
                                                        }
                                                        .submit2 {
                                                            border: none;
                                                            padding: 7px;
                                                            width: 75px;
                                                            border-radius: 7px;
                                                            color: white;
                                                            background-color: red;
                                                        }
                                                    </style>
                                                    <form action="loker/update/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <p class="mb-1">Nama</p>
                                                        <input class="form-control" type="text" name="name" id="" value="{{ $item->name }}" disabled>
                                                        <p class="mb-1">Nama Perusahaan</p>
                                                        <input class="form-control" type="text" name="namaP" value="{{ $item->namaP }}" id="" disabled>
                                                        <p class="mb-1">Posisi</p>
                                                        <input class="form-control" value="{{ $item->posisi }}" type="text" name="posisi" id="" disabled>
                                                        {{-- <p class="mb-1">Tanggal Buka</p> --}}
                                                        {{-- <input class="form-control" value="{{ $item->tglbuka }}" type="date" name="tglbuka" id="" disabled> --}}
                                                        {{-- <p class="mb-1">Tanggal Tutup</p> --}}
                                                        {{-- <input class="form-control" value="{{ $item->tgltutup }}" type="date" name="tgltutup" id="" disabled> --}}
                                                        <p class="mb-1">Foto</p>
                                                        @if(file_exists("storage/". $item->fotolowongan))
                                                        <img src="/storage/{{ $item->fotolowongan }}" alt="" width="50" height="50"><br>
                                                        @endif
                                                        <p class="mb-1">Status</p>
                                                        <select class="form-select" name="status" id="">
                                                            <option {{ $item->status == 'Disetujui' ? 'selected' : ''}}>Disetujui</option>
                                                            <option {{ $item->status == 'Proses' ? 'selected' : ''}}>Proses</option>
                                                            <option {{ $item->status == 'Ditolak' ? 'selected' : ''}}>Ditolak</option>
                                                        </select>
                                                        <input class="mt-3 submit1" type="submit" value="Update" name="update">
                                                        <input class="mt-3 submit2" type="button" data-bs-dismiss="modal" value="Close">
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
