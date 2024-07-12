<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UMKM | TEAM</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <div class="topbar">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="topbar-info d-flex flex-wrap"> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end">
                            <a href="https://www.facebook.com/STTTerpaduNF/" class="btn-square text-white me-2"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/STTTerpaduNF1/" class="btn-square text-white me-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/sttterpadunf/" class="btn-square text-white me-2"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl">
                <a href="#page" class="navbar-brand ms-3">
                    <h1 class="text-primary display-5">UMKM</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('/news') }}" class="nav-item nav-link">News</a>
                        <a href="{{ url('/figure') }}" class="nav-item nav-link">Figure</a>
                        <a href="{{ url('/team') }}" class="nav-item nav-link active">Team</a>
                        <ul class="navbar-nav ms-auto">
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <li>
                                        <a href="{{ url('/admin') }}" class="nav-item nav-link">Dashboard</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('profile.edit') }}" class="nav-link">Profile</a>
                                </li>
                                <li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="nav-link" href="route('logout')"
                                            onclick="event.preventDefault();
                                                    confirmLogout(event);">
                                            Logout
                                        </a>
                                        <!-- Authentication -->
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endguest
                            <a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>

                        </ul>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;"></div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Tim Kami</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-white">Team</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid volunteer py-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="{{ asset('assets/img/profil1.jpg') }}" class="img-fluid w-100"
                                    alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Ihsan Ghani</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="{{ asset('assets/img/profil2.jpg') }}" class="img-fluid w-100"
                                    alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Kholilah Nurafifah</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="{{ asset('assets/img/profil3.jpg') }}" class="img-fluid w-100"
                                    alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Angga Alfareza</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="volunteer-img">
                                <img src="{{ asset('assets/img/profil4.jpg') }}" class="img-fluid w-100"
                                    alt="Image">
                                <div class="volunteer-title">
                                    <h5 class="mb-2 text-white">Cika meilia pratiwi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h1 class="mb-4">Our Team</h1>
                    <p class="mb-4">Website ini disusun oleh 4 orang mahasiswa STT-NF Sebagai Tugas Project 2
                    </p>
                    <p class="text-dark"><i class=""></i> Ihsan Ghani-0110223191</p>
                    <p class="text-dark"><i class=""></i> Kholilah Nurafifah-0110223173</p>
                    <p class="text-dark"><i class=""></i> Cika meilia pratiwi-0110223177</p>
                    <p class="text-dark"><i class=""></i> Angga Alfareza-0110223185.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-body py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">

                        <p class="mb-4">STT Terpadu Nurul Fikri

                            Kampus A: Jl. Situ Indah no.116, Cimanggis, Depok

                            Kampus B: Jl. Raya Lenteng Agung No.20, Jagakarsa

                            Telpon: 021 - 786 3191

                            Email: info@nurulfikri.ac.id</p>
                        <div class="position-relative mx-auto">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Team</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Ihsan Ghani</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Angga Alfareza</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Chika Meilia Pratiwi</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Kholilah Nurafifah</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Address</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.241610439638!2d106.84187777355652!3d-6.362768562241311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sid!2sid!4v1720081535321!5m2!1sid!2sid"
                                    width="400" height="300" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-body">
                        <i class="fas fa-copyright text-light me-2"></i>Develop by Kelompok 5, STT Nurul Fikri
                    </span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Javascript -->
    <script>
        function confirmLogout(event) {
            if (confirm("Apa Kamu Yakin Ingin Log Out?")) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>

</body>

</html>
