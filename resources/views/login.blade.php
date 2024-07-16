<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
                        <a href="/" class="nav-item nav-link" onclick="setActive(this)">Tentang</a>
                        <a href="/t" class="nav-item nav-link" onclick="setActive(this)">Paket</a>
                        <a href="/" class="nav-item nav-link" onclick="setActive(this)">Galeri</a>
                        <a href="/" class="nav-item nav-link" onclick="setActive(this)">Cek Pemesanan</a>
                        <a href="/" class="nav-item nav-link" onclick="setActive(this)">Kontak</a>
                    </div>
                    <a href="{{route('auth.index')}}" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block">Masuk</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid contact py-6 wow bounceInUp mt-4" data-wow-delay="0.1s">
        <div class="container col-7">
            <div class="p-5 bg-light rounded contact-form">
                <div class="row g-4">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger mt-3" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="col-12">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Login</small>
                        <h1 class="display-5 mb-0">Sudah punya akun, silakan login</h1>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <form action="{{route('auth.postLogin')}}" method="POST">
                            @csrf
                            <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Email" name="email">
                            <input type="password" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Password" name="password">
                            <div class="d-flex">
                                <button class=" btn btn-primary form-control p-2 border-primary bg-primary m-2" type="submit" style="width:20%">Masuk</button>
                                <p class="m-4">Belum Punya Akun? <a href="{{route('auth.register')}}"> Daftar</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
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