<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Title -->
    <title>Modernize Landing Page</title>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('landingpage/dist/images/logos/favicon.ico') }}">
    <!--  Aos -->
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/css/style.min.css') }}">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
    <style>
        /* .carousel-item img {
            max-width: 100%;
            height: auto;
        } */

        .carousel-item {
            overflow: hidden;
            border-radius: 20px;
        }

        .carousel-item img {
            height: 330px;
            object-fit: cover;
            object-position: center;
            border-radius: 20px;
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="page-wrapper p-0 overflow-hidden">
        @include('sweetalert::alert')
        @sectionMissing('fixed-header')
            @include('landing-page.header')
            @include('landing-page.off-canvas')
        @else
            @yield('fixed-header')
        @endif
        <div class="body-wrapper overflow-hidden">
            @yield('content')
        </div>
        @sectionMissing('fixed-footer')
            @include('landing-page.footer')
        @else
            @yield('fixed-footer')
        @endif

    </div>
    <script src="{{ asset('landingpage/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/js/custom.js') }}"></script>
    @stack('scripts')
    <script>
        // change URL Js
        $(function() {
            let currentURL =
                window.location != window.parent.location ?
                document.referrer :
                document.location.href;
            if (currentURL == "https://themeforest.net/") {
                $("a.download-link").attr(
                    "href",
                    "#"
                );
            } else {
                $("a.download-link").attr(
                    "href",
                    "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
                );
            }
        });

        $(document).ready(function() {
            // Initialize Bootstrap Carousel
            $('#carouselExampleIndicators').carousel();
        });
    </script>
</body>

</html>
