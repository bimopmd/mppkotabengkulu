
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script language='JavaScript'>
        var txt = "Mal Pelayanan Publik - Kota Bengkulu";
        var speed = 300;
        var refresh = null;

        function action() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refresh = setTimeout("action()", speed);
        }
        action();
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/icon-fasilitas/mpp.png')}}" style="width: 50%;" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100&display=swap" rel="stylesheet">

    <!-- css digimedia -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style-digimedia.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-digimedia.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-digimedia.css')}}">
    <!-- end css digimedia-->

    <!-- css constra -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/colorbox/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-constra.css')}}">
    <!-- end css constra -->

    <!-- css dentcare -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-dentcare.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-dentcare.css')}}" rel="stylesheet">
    <!-- end css dentcare -->


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-header1 ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Fri : 8.00
                        am - 16.30 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-shape1 text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0 text-white"><i class="fa fa-envelope-open me-2 text-white"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0 text-white"><i class="fa fa-phone-alt me-2 text-white"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    {{-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h4 class="m-0 color-mpp">MPP Kota Bengkulu</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="#about" class="scroll-to-section nav-item nav-link">About</a>
                <a href="#services" class="nav-item nav-link">Fasilitas</a>
                <a href="#instansi" class="nav-item nav-link">Instansi</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Dentist</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button>
            <a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Login</a>
        </div>
    </nav> --}}
    @include('layoutsFE.headerFE')
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Carousel Start -->
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }
        @font-face {
            font-family: "BillionDreams";
            src: url('assets/font/BillionDreams_PERSONAL.ttf') format('truetype');
        }
        .heebo{
            font-family: "heebo";
            src: url('assets/font/Heebo-VariableFont_wght.ttf') format('truetype');
        }

    </style>
    <div class="banner-carousel banner-carousel-1 mb-0 fluid p-0">
        <div class="banner-carousel-item bg-slider2">
        {{-- <div class="banner-carousel-item" style="background-image:url({{asset('assets/img/background-header/background-header5.jpg')}})"> --}}
            <div class="slider-content-overlay">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6 align-self-center slide-title" data-animation-in="slideInLeft">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="slide-sub-title" data-animation-in="slideInRight">
                                            MAL PELAYANAN PUBLIK
                                        </h3>
                                        <p data-animation-in="slideInRight" data-duration-in="1.2">
                                            <!-- <a href="services.html" class="slider btn btn-primary">Our Services</a> -->
                                            <h3 class="slide-sub-title2"
                                                style="font-family: 'BillionDreams', sans-serif;">Balai Harapan
                                                & Do'a
                                            </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center slide-title" data-animation-in="slideInRight">
                            <div class="Right-content show-up header-text wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p>
                                            <img src="{{asset('assets/img/header-slider/walikota4.jpg.png')}}" alt="">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-carousel-item bg-appointment3">
            <div class="slider-content text-left">
                <div class="container h-100">
                    <!-- <div class="carousel-caption1 row align-items-center h-100"> -->
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                            <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                            <p data-animation-in="slideInRight">
                                <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box kotak">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">We can't back againg</h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-dark" href="#">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Start -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

        @font-face {
            font-family: "BillionDreams";
            src: url('font/BillionDreams_PERSONAL.ttf') format('truetype');
        }

        /* h1 {
            font-size: 16px;
            text-justify: auto;
            font-family: "BillionDreams", arial;
        } */
    </style>
    <!-- About Start -->
    @include('layoutsFE.aboutFE')
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- About End -->

    <!-- Fasilitas Start -->
    @include('layoutsFE.fasilitasFE')
    <br>
    <br>
    <br>
    <br>

    <!-- Appointment Start -->
    <div id="instansi" class="instansi container-fluid bg-appointment kotak my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg py-5">
            <div class="py-12">
                <div id="portfolio" class="our-portfolio kotak section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="0.3s">
                                    <h6>Our Portofolio</h6>
                                    <h4>See Our Recent <em>Projects</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="loop owl-carousel">
                                    @foreach ($instansi as $data)
                                    <div class="item">
                                        <a href="/frontend{{$data->id}}">
                                            <div class="portfolio-item">
                                                @if ($data->logo_instansi)
                                                <div class="thumb">
                                                    <img width="30" height="350" src="{{asset('storage/' . $data->logo_instansi)}}"
                                                    alt="">
                                                </div>
                                                @else
                                                <div class="icon">
                                                    <img src="https://source.unsplash.com/100x80">
                                                </div>
                                                @endif
                                                <div class="down-content">
                                                    <h6>{{$data->nama_instansi}}</h6>
                                                    <span>-----</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-animation-in="slideInLeft">
                    <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">View All
                        Instansi</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid text-light py-4" style="background: #ffffff;">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h4 style="font-family: 'BillionDreams', sans-serif;">
                    IZIN BERES, INVESTASI MENINGKAT
                </h4>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" style="color: #82af7c" class="btn btn-lg btn-warning btn-lg-square rounded back-to-top" ><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('assets/js/main-dentcare.js')}}"></script>
    <!-- Template Javascript -->

    <!-- contsra jQuery Library -->
    <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/plugins/colorbox/jquery.colorbox.js')}}"></script>
    <script src="{{asset('assets/plugins/shuffle/shuffle.min.js')}}" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{asset('assets/plugins/google-map/map.js')}}" defer></script>
    <script src="{{asset('assets/js/script-constra.js')}}"></script>

    <!-- js digimedia -->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/animation-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/custom-digimedia.js')}}"></script>
</body>

</html>
