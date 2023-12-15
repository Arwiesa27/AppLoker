<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LokerAlumni</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>

    <div style="background-color: #0000FF" class="container-fluid text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex" style="opacity:0">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span>+012 345 6789</span>
                    </div>
                </div>
                <a href="index.html" class="h1 mb-0" style="color:#FFFFFF">Loker<span
                        class="text-dark">Alumni</span></a>
                <div class="d-flex" style="opacity:0">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 style="color:#0000FF" class=" m-0">Loker<span class="text-dark">Alumni</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a style="color:#0000FF" href="index.html" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="/lowongan" class="dropdown-item">Ajukan Lowongan</a>
                            </div>
                        </div>
                        {{-- <a href="/lowongan" class="nav-item nav-link">Pasang Lowongan</a> --}}
                        {{-- <a href="/testimoni" class="nav-item nav-link">Testimoni</a> --}}
                        <a href="/home" class="nav-item nav-link">Kontak</a>
                    </div>
                    @if (!empty(Auth::user()->id))

                    <div class="ms-auto d-none d-lg-flex">
                        <a href="/logout"><i style="color: #0000FF;margin-right:1rem" class="fa fa-sign-out"></i></a>
                    </div>

                    @else

                    <div class="ms-auto d-none d-lg-flex">
                        <a href="/login"><i style="color: #0000FF;margin-right:1rem" class="fa fa-user"></i></a>
                    </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/ypc1.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Lowongan Kerja Alumni
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/ypc1.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Lowongan Kerja Alumni
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Lowongan Kerja</h1>
            </div>
            <div class="row g-4 justify-content-center" style="display:flex">
                @foreach ($lokers as $item)
                    @if ($item->status == 'Disetujui')
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <img src="/storage/{{ $item->fotolowongan }}" width="150px"
                                    style="margin-bottom:1rem;max-width:150px" alt="">
                                <h5 class="mb-3">{{ $item->namaP }}</h5>
                                <p class="mb-4">{{ $item->persyaratan }}</p>
                                <p class="mb-1">{{ $item->tglbuka }}</p>
                                <p class="mb-4">{{ $item->tgltutup }}</p>
                                <style>
                                    .more {
                                        background-color: #FFFFFF;
                                        color: #0000FF;
                                        border-radius: 10px;
                                        border: 1px solid #0000FF;
                                        padding: 7px;
                                    }
                                    .more:hover {
                                        background-color: #0000FF;
                                        border-radius: 10px;
                                        border: 1px solid #FFFFFF;
                                        padding: 7px;
                                    }
                                    a:hover {
                                        color: #FFFFFF;
                                    }
                                </style>
                                <button class="more"><a href="/more">Read More</a></button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <style>
            .all {
                background-color: #FFFFFF;
                color: #0000FF;
                border: 1px solid #0000FF;
                border-radius: 5px;
                margin-right: 2rem;
                float: right;
            }

            .all:hover {
                background-color: #0000FF;
                color: #FFFFFF;
                border: 1px solid #FFFFFF;
            }
        </style>
        <a href="/all" class="btn all py-2 px-4">View All</a>
    </div>
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn mt-5"
        data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 style="color:#0000FF" class="h1 mb-0">Loker<span class="text-white">Alumni</span></h1>
                    </a>
                    <p><i class="fa fa-map-marker-alt me-2"></i>Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna,
                        Kabupaten Tasikmalaya, Jawa Barat 46414</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
{{-- <div class="modal fade" id="editModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($lokers as $item)
                    <p class="mb-1">Nama</p>
                    <input class="form-control" type="text" name="name" id=""
                        value="{{ $item->name }}" disabled>
                    <p class="mb-1">Nama Perusahaan</p>
                    <input class="form-control" type="text" name="namaP" value="{{ $item->namaP }}"
                        id="" disabled>
                    <p class="mb-1">Posisi</p>
                    <input class="form-control" value="{{ $item->posisi }}" type="text" name="posisi"
                        id="" disabled>
                    <p class="mb-1">Persyaratan</p>
                    <textarea name="persyaratan" disabled id="" cols="30" rows="10">{{ $item->persyaratan }}</textarea>
                    <p class="mb-1">Tanggal Buka</p>
                    <input class="form-control" value="{{ $item->tglbuka }}" type="date" name="tglbuka" id="" disabled>
                    <p class="mb-1">Tanggal Tutup</p>
                    <input class="form-control" value="{{ $item->tgltutup }}" type="date" name="tgltutup" id="" disabled>
                    <p class="mb-1">Foto</p>
                    @if (file_exists('storage/' . $item->fotolowongan))
                        <img src="/storage/{{ $item->fotolowongan }}" alt="" width="50"
                            height="50"><br>
                    @endif
                    <p class="mb-1">Status</p>
                    <input type="text" disabled name="{{ $item->status }}" id="" class="form-control">
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Apply</button>
            </div>
        </div>
    </div>
</div> --}}

</html>
