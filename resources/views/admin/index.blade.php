<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Aneka Bus Offline Ticket| @yield('title')</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Reimburshment App" />
    <meta name="author" content="" />
    <meta name="keywords" content="Reimburshment App" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="../../dist/images/logos/favicon.ico" />

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="../../dist/css/style.min.css" />
    <style>
        .bg-header {
            background-color: #b48424;
            /* background-color: #a88c4f; */
            color: #f8f9fa;
        }

        .text-bg {
            color: #b48424;
        }

        .bg-card {
            background-color: #7e6e4b;
            /* background-color: #a88c4f; */
            color: #f8f9fa;
        }
    </style>
    @stack('style')

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../../dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../../dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('sweetalert::alert')
        @sectionMissing('auth-page')
            <!-- Sidebar Start -->
            @include('admin.components.sidebar')
            <!--  Sidebar End -->

            <!--  Main wrapper -->
            <div class="body-wrapper">
                <!--  Header Start -->
                @include('admin.components.header')
                <!--  Header End -->
                <div class="container-fluid">
                    @yield('main')
                </div>
                {{-- @hasSection('fixed-footer')
                    @yield('fixed-footer')
                @endif --}}
            </div>
        @else
            @yield('auth-page')
        @endif
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>

    <!--  Mobilenavbar -->
    @include('admin.components.mobile-navbar')

    <!--  Search Bar -->
    @include('admin.components.search-bar')

    <!--  Customizer -->
    @include('admin.components.customizer')
    <!--  Customizer -->

    <!--  Import Js Files -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <script src="../../dist/js/custom.js"></script>

    @stack('scripts')
</body>

</html>
