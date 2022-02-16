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
    <link href="{{asset('assets/img/icon-fasilitas/mpp.png')}}" style="width: 50%;" rel="icon">


    <!-- codebase -->
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.css')}}">
    <!-- end codebase -->
    <!-- dentcare -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-dentcare.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-dentcare.css')}}" rel="stylesheet">
    <!-- end dentcare -->
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
            .montserrat{
                font-family: "montserrat";
                src: url('assets/font/Montserrat-VariableFont_wght.ttf') format('truetype');
            }
    </style>

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
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    {{-- @include('layoutsFE.headerFE') --}}
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h4 class="m-0 color-mpp" style="font-family: 'heebo', sans-serif;">MPP Kota Bengkulu</h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="#" class="nav-item nav-link active"></a>
        </div>
        <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                class="fa fa-search"></i>
        </button>
        <button style="background-color: #5b81ac" href="http://127.0.0.1:8000/login" class="btn py-2 px-4 ms-3 text-white">Login</button>
    </div>
</nav>
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


    <!-- Hero Start -->
    <div class="container-fluid bg-appointment3 py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 animated zoomIn heebo" style="color: #2f3030">About Us</h1>
                <a href="#" class="h4" style="color: #2f3030">{!!($instansi->nama_instansi)!!}</a>
                {{-- <i class="far fa-circle text-white px-2"></i> --}}
                {{-- <a href="" class="h4 text-white">{!!($instansi->singkatan_instansi)!!}</a> --}}
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="section-title mb-4">
                    <h3 class="position-relative d-inline-block text-uppercase" style="color: #82af7c">About Us</h3>
                    <hr>
                </div>
                <a type="button" href="/" class="btn btn-outline-success mr-5 mb-5" style="color: #031433">
                    <i class="fa fa-home mr-5"> home</i>
                </a>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{asset('storage/'. $instansi->logo_instansi)}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <!-- <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5> -->
                        <h1 class="display-5 mb-0" style="font-family: 'FontNamaInstansi', sans-serif;">{!!($instansi->nama_instansi)!!}
                        </h1>
                    </div>
                    <!-- <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no
                        lorem sit clita duo justo magna dolore</h4> -->
                    <div class="row g-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.3s">
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">Jenis Instansi</h4>
                            <h6 class="color: black;">{!!($instansi->kategori_instansi)!!}</h6>
                            <hr>
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">Alamat</h4>
                            <h6 class="color: black;">Jl. Basuki Rahmat (Eks-Balai Kota Bengkulu). Sawah Lebar Baru, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38115</h6>
                            <hr>
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">Waktu Pelayanan</h4>
                            <h6 class="color: black;">{!!($instansi->waktu_pelayanan_instansi)!!}</h6>
                            <hr>
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">Telephone</h4>
                            <h6 class="color: black;">08123456789</h6>
                            <hr>
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">E-Mail</h4>
                            <h6 class="color: black;">tester@gmail.com</h6>
                            <hr>
                            <h4 class="mb-6" style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);"
                                class=" fa
                            fa-check-circle me-3">Website</h4>
                            <h6 class="color: black;" data><a href="{{$instansi->web_instansi}}" target="_blank">{{$instansi->web_instansi}}</a></h6>
                            <hr>
                        </div>
                        <!-- <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div> -->
                    </div>
                    <button style="background-color: #5b81ac" href="#" class="btn text-white py-3 px-5 mt-4 wow zoomIn"
                        data-wow-delay="0.6s">cooming soon</button>
                </div>
            </div>
            <!-- Simple Wizards -->
            <h2 class="content-heading">Keterangan</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Simple Wizard -->
                    <div class="js-wizard-simple block">
                        <!-- Step Tabs -->
                        <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#visimisi" data-toggle="tab">Visi & Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#dasarhukum" data-toggle="tab">Dasar Hukum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#daftarlayanan" data-toggle="tab">Daftar Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#persyaratan" data-toggle="tab">Persyaratan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#alurlayanan" data-toggle="tab">Mekanisme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#biaya" data-toggle="tab">Biaya</a>
                            </li>
                        </ul>
                        <!-- END Step Tabs -->

                        <!-- Form -->
                        <form action="be_forms_wizard.html" method="post">
                            <!-- Steps Content -->
                            <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                <!-- Step 1 -->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <br>
                                    <br>
                                    {{-- <h4 class="mb-6"
                                        style="font-family: 'FontDetail', sans-serif; color: rgb(73, 73, 72);" class=" fa
                                        fa-check-circle me-3">Website</h4> --}}
                                    <label for="profile">Profile</label>
                                    <h6 class="color: black;">{!!($instansi->profile_instansi)!!}</h6>
                                </div>
                                <!-- END Step 1 -->

                                <!-- Step 2 -->
                                <div class="tab-pane" id="visimisi" role="tabpanel">
                                    <br>
                                    <br>
                                    <label for="visimisi">Visi dan Misi</label>
                                    <h6 class="color: black;">{!!($instansi->visi_misi_instansi)!!}</h6>
                                </div>
                                <!-- END Step 2 -->

                                <!-- Step 3 -->
                                <div class="tab-pane" id="daftarlayanan" role="tabpanel">
                                    <br>
                                    <br>
                                    <label for="daftarlayanan">Daftar Pelayanan</label>
                                    <h6 class="color: black;">{!!($instansi->daftar_layanan_instansi)!!}</h6>
                                </div>
                                <!-- END Step 3 -->

                                <!-- Step 4 -->
                                 <div class="tab-pane" id="dasarhukum" role="tabpanel">
                                    <br>
                                    <br>
                                    <label for="dasarhukum">Dasar Hukum</label>
                                    <h6 class="color: black;">{!!($instansi->dasar_hukum_instansi)!!}</h6>
                                </div>
                                <!-- END Step 4 -->

                                <!-- Step 5 -->
                                <div class="tab-pane" id="persyaratan" role="tabpanel">
                                    <br>
                                    <br>
                                    <label for="persyaratan">Syarat</label>
                                    <h6 class="color: black;">{!!($instansi->persyaratan_layanan_instansi)!!}</h6>
                                </div>
                                <!-- END Step 5 -->

                                <!-- Step 6 -->
                                <img class="tab-pane  rounded wow zoomIn" id="alurlayanan" role="tabpanel" src="{{asset('storage/'. $instansi->alur_layanan_instansi)}}" style="object-fit: cover;" alt="">
                                {{-- <div class="tab-pane" id="alurlayanan" role="tabpanel">
                                    <div class="col-lg-5" style="min-height: 400px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                                src="{{asset('storage/'. $instansi->alur_layanan_instansi)}}" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- END Step 6 -->

                                <!-- Step 7 -->
                                <div class="tab-pane" id="biaya" role="tabpanel">
                                    <br>
                                    <br>
                                    <label for="biaya">Biaya</label>
                                    <h6 class="color: black;">{!!($instansi->biaya_layanan_instansi)!!}</h6>
                                </div>
                                <!-- END Step 7 -->

                            </div>
                            <!-- END Steps Content -->

                            <!-- Steps Navigation -->
                            <div class="block-content block-content-sm block-content-full bg-body-light">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                            <i class="fa fa-angle-left mr-5"></i> kembali
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                            selanjutnya <i class="fa fa-angle-right ml-5"></i>
                                        </button>
                                        {{-- <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                            <i class="fa fa-check mr-5"></i> Submit
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- END Steps Navigation -->
                        </form>
                        <!-- END Form -->
                    </div>
                    <!-- END Simple Wizard -->
                </div>
            <!-- END Simple Wizards -->
        </div>
    </div>
    <!-- About End -->
    <br>
    <br>
    <br>
    <br>

    <!-- Footer Start -->
    <div class="container-fluid text-light py-5" style="background: #82af7c;">
        <div class="container">
            <div class="row g-6">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All
                        Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                            Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>
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

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main-dentcare.js')}}"></script>


    <!-- js codebase -->
    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>
    <script src="{{asset('assets/js/pages/be_forms_wizard.min.js')}}"></script>
    <!-- end js codebase -->
</body>

</html>
