<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title','Kota Bengkulu')</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('assets/js/plugins/sweetalert2/sweetalert2.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sweetalert2/sweetalert2.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/trix.css')}}">



    <!-- Page JS Plugins CSS -->


    {{-- trix editor --}}
    <link rel="stylesheet" href="{{asset('assets/css/trix.css')}}">

    @yield('css-custom')
  </head>
  <body>

    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern side-trans-enabled page-header-fixed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        {{-- @include('layouts.side-header') --}}
        <!-- END Side Header -->

        <!-- Side Content -->
        {{-- @include('layouts.side-content') --}}
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      @include('layouts.sidebar')
      <!-- END Sidebar -->

      <!-- Header -->
      @include('layouts.header')
      <!-- END Header -->

      <!-- Main Container -->
      @yield('content')
      <!-- END Main Container -->

      <!-- Footer -->
      @include('layouts.footer')
      @include('sweetalert::alert')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
    {{-- @include('layouts.intro') --}}
    <!-- END Onboarding Modal -->
    @yield('preview-logo')
    @yield('preview-alur')
    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
    {{-- js trix editor --}}
    <script src="{{asset('assets/js/trix.js')}}"></script>
    <!-- Page JS Plugins -->
    {{-- <script src="{{asset('assets/js/plugins/es6-promise/es6-promise.auto.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/sweetalert2/sweetalert2.min.js')}}"></script> --}}

    <link rel="stylesheet" href="{{asset('assets/js/sweetalert/sweetalert2.all.js')}}">
    <link rel="stylesheet" href="{{asset('assets/js/sweetalert/sweetalert2.all.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/js/sweetalert/sweetalert2.js')}}">
    <link rel="stylesheet" href="{{asset('assets/js/sweetalert/sweetalert2.min.js')}}">
    <!-- Page JS Code -->
    @stack('script-tambahan')
    {{-- <script src="{{asset('assets/js/pages/be_comp_dialogs.min.js')}}"></script> --}}

    <script type="text/javascript" src="{{asset('assets/js/trix.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>
