<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Stellar Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="../vendors/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="../vendors/chartist/chartist.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../css/style.css">

          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
      </head>

<body>
    <div class="container-scroller">

            @include('layouts.admin._nav')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.admin._sidebar')
                @yield('content')
                <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                @include('layouts.admin._footer')
            </div>
            </footer>
            </div>
    </div>

    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/moment/moment.min.js"></script>
    <script src="../vendors/daterangepicker/daterangepicker.js"></script>
    <script src="../vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../js/dashboard.js"></script>
</body>
</html>
