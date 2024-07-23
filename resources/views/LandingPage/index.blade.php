<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Intan Payung Studio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .nav-bar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: white; 
        }
        /* Tambahkan padding top untuk konten setelah header */
        #home {
            padding-top: 200px; 
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary fw-bold mb-0">IntanPayung<span class="text-dark">Studio</span> </h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="/" class="nav-item nav-link" onclick="setActive(this)">Home</a>
                        <a href="#tentang" class="nav-item nav-link" onclick="setActive(this)">Tentang</a>
                        <a href="#paket" class="nav-item nav-link" onclick="setActive(this)">Paket</a>
                        <a href="#galeri" class="nav-item nav-link" onclick="setActive(this)">Galeri</a>
                        <a href="#galeri" class="nav-item nav-link" onclick="setActive(this)">Cek Pemesanan</a>
                        <a href="#kontak" class="nav-item nav-link" onclick="setActive(this)">Kontak</a>
                    </div>
                    <a href="{{route('auth.index')}}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Masuk</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Selamat Datang di Intan Payung Studio</small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Abadikan Momen Anda di <span class="text-primary">Intan</span>Studio</h1>
                    <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Pesan Sekarang</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <!-- Carousel Start -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/img-1.jpg" class="d-block w-100 img-fluid rounded animated zoomIn" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/img-2.jpg" class="d-block w-100 img-fluid rounded animated zoomIn" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/img-3.jpg" class="d-block w-100 img-fluid rounded animated zoomIn" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carousel End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Satrt -->
    <div class="container-fluid py-6" id="tentang">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="img/img-1.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Tentang Kami</small>
                    <h1 class="display-5 mb-4">Dipercaya oleh 200+ Klien yang Puas</h1>
                    <p class="mb-4">Kami berdedikasi untuk memberikan pelayanan terbaik dan pengalaman tak terlupakan. Dengan tim profesional dan fasilitas modern, kami siap mengabadikan setiap momen istimewa Anda. Kami bangga telah melayani lebih dari 200 klien yang puas dengan hasil foto kami.</p>
                    <div class="row g-4 text-dark mb-5">
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Penjadwalan yang tepat
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Dukungan Pelanggan 24/7
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Opsi Kustomisasi Mudah
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Penawaran Menarik untuk Foto Menarik
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
        <div class="container-fluid team py-6" id="paket">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Paket</small>
                    <h1 class="display-5 mb-5">Kami menawarkan berbagai pilihan paket untuk kebutuhan Anda</h1>
                </div>
                <div class="row g-4">
                    @foreach($paket as $row)
                    <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="{{ Storage::url($row->foto) }}" alt="">
                            <div class="team-content text-center py-3 bg-darks rounded-bottom">
                                <h4 class="text-black">{{ $row->nama }}</h4>
                                <p class="text-white mb-0">Rp {{ $row->harga }}</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                               <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->


    <!-- Events Start -->
    <div class="container-fluid event py-6" id="galeri">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Galeri</small>
                <h1 class="display-5 mb-5">Galeri Kami</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All Events</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Wedding</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Graduation</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Family</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Couple</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($data as $row)
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="{{ Storage::url($row->foto) }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">{{ $row->kategori }}</h4>
                                                <a href="{{ Storage::url($row->foto) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($data as $row)
                                    @if($row->kategori == 'Wedding')
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="{{ Storage::url($row->foto) }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">{{ $row->kategori }}</h4>
                                                <a href="{{ Storage::url($row->foto) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($data as $row)
                                    @if($row->kategori == 'Graduation')
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="{{ Storage::url($row->foto) }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">{{ $row->kategori }}</h4>
                                                <a href="{{ Storage::url($row->foto) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($data as $row)
                                    @if($row->kategori == 'Family')
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="{{ Storage::url($row->foto) }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">{{ $row->kategori }}</h4>
                                                <a href="{{ Storage::url($row->foto) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($data as $row)
                                    @if($row->kategori == 'Couple')
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="{{ Storage::url($row->foto) }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">{{ $row->kategori }}</h4>
                                                <a href="{{ Storage::url($row->foto) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h1 class="text-primary">Intan<span class="text-dark">Studio</span></h1>
                        <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Paket Kami</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Wedding</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Graduation</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Family</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Couple</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Kontak Kami</h4>
                        <div class="d-flex flex-column align-items-start">
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                            <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Sosial Media</h4>
                        <div class="d-flex flex-column align-items-start">
                            <p><i class="fab fa-facebook-f text-primary me-2"></i> Intan Payung Studio</p>
                            <p><i class="fab fa-instagram text-primary me-2"></i> @intanpayungstudio_</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Intan Payung Studio</a></span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                 
                    Tim IT Intan Payung Studio 2024
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function setActive(element) {
            const navLinks = document.querySelectorAll('.navbar .navbar-nav .nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            element.classList.add('active');
        }
    </script>
</body>

</html>