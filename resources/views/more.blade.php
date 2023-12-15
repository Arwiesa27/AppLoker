<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LokerAlumni</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

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
    <!-- Spinner End -->

    <!-- Brand Start -->
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
                        <a style="color:#0000FF" href="/home" class="nav-item nav-link active">Kembali</a>
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
    <!-- Navbar End -->

    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Lowongan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- Appoinment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">We Ensure You Will Always Get The Best Result</h1>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Alamat</h5>
                            <span>Jl. Garut - Tasikmalaya, Cikunten, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46414</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Jam Operasional</h5>
                            <span>Senin-Sabtu 08am-5pm, Minggu Tutup</span>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Informasi Perusahaan</h2>
                    <div class="row g-3">
                        @foreach ($lokers as $key => $item)
                        <center>
                            <p class="mb-1">Nama Perusahaan</p>
                            <input class="form-control" type="text" name="namaP" value="{{ $item->namaP }}"
                                id="" disabled>
                            <p class="mb-1">Posisi</p>
                            <input class="form-control" value="{{ $item->posisi }}" type="text" name="posisi"
                                id="" disabled>
                            <p class="mb-1">Tanggal Buka</p>
                            <input class="form-control" value="{{ $item->tglbuka }}" type="date" name="tglbuka"
                                id="" disabled>
                            <p class="mb-1">Tanggal Tutup</p>
                            <input class="form-control" value="{{ $item->tgltutup }}" type="date" name="tgltutup"
                                id="" disabled>
                            <p class="mb-1">Foto</p>
                            @if (file_exists('storage/' . $item->fotolowongan))
                                <img src="/storage/{{ $item->fotolowongan }}" alt="" width="250"
                                    height="250"><br>
                            @endif
                            <style>
                                .apply {
                                    width: 10%;
                                    margin-top: 2rem;
                                    background-color: #0000FF;
                                    color: #FFFFFF;
                                    border-radius: 10px;
                                    border: none;
                                    padding: 7px;
                                }
                            </style>
                            <button class="apply" data-bs-toggle="modal" data-bs-target="#applyModal">Apply</button>
                        </center>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="#">LokerAlumni</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
