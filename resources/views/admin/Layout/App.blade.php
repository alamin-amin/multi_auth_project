<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('admin_assets/img/logo/logo.png') }}" rel="icon">
    <title>Admin Dashboard</title>
    <link href="{{ asset ('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href=" {{asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin_assets/css/ruang-admin.min.css')  }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include("admin.Layout.Sidebar")
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('admin.Layout.Header')
                <!-- Topbar -->

                <!-- Container Fluid-->

                @yield('admin')

                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('admin.Layout.Footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/demo/chart-area-demo.js') }}"></script>
</body>

</html>