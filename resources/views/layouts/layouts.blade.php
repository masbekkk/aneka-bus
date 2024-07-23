<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description"
        content=" PT Aneka Mulia Transport adalah perusahaan penyedia Bus Penumpang antar kota yang telah berdiri
                        sejak tahun 2016 di Makassar, dan telah dipercaya lebih dari 200.000++ pelanggan.

                        Kami selalu mengedepankan kenyamanan para pelanggan kami, dibuktikan dengan jenis armada yang
                        terupdate dan terbaik di kelasnya yaitu Sleeper Suite Class, Slepeer suite Combi Bus, Premier
                        Ultimate Class, dan Executive Class.

                        Kami bertekad untuk selalu menjadi perusahaan transportasi terkemuka dan menjadi mitra
                        terpercaya yang memberikan kenyamanan di setiap perjalanan anda." />
    <meta name="author" content="anekatransport" />
    <meta name="keywords" content="Aneka Transport, anekatransport, aneka transport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Title -->
    <title>Aneka Transport @hasSection('title')
            - @yield('title')
        @endif
    </title>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    {{-- <link rel="shortcut icon" type="image/png" href="{{ asset('landingpage/dist/images/logos/favicon.ico') }}"> --}}
    <!--  Aos -->
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('landingpage/dist/css/style.min.css') }}"> --}}
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet"
        href="{{ asset('dist/css/style.min.css?v=' . bin2hex(random_bytes(20))) }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        .bg-header {
            background-color: #ffb404;
            /* background-color: #a88c4f; */
            color: #f8f9fa;
        }

        .bg-card {
            background-color: #7e6e4b;
            /* background-color: #a88c4f; */
            color: #f8f9fa;
        }

        .text-bg {
            color: #ffb404;
        }

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

        .fixed-bottom-custom {
            height: 4rem;
            background-color: #f8f9fa;
            border-top: 2px solid #e2e2e2;
            z-index: 1050;
        }

        .p-container {
            padding: 0 1rem;
        }

        .price-text {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .price-subtext {
            font-size: 0.875rem;
        }

        .custom-icon {
            font-size: 2rem;
            color: #ffffff;
        }

        .icon-feature {
            width: 50px;
            height: 50;
            fill: #ffb404;
            margin-bottom: 1rem;
        }

        .image-slick {
            height: 20rem;
            /* Set your desired height */
            width: 100%;
            border-radius: 1.5rem;
            /* Adjust width to maintain aspect ratio */
        }
    </style>
    @stack('styles')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2"
    tabindex="0">
    <div class="page-wrapper p-0 overflow-hidden text-dark">
        @include('sweetalert::alert')
        @sectionMissing('fixed-header')
            @include('landing-page.header')
        @else
            @yield('fixed-header')
        @endif
        @sectionMissing('off-canvas')
            @include('landing-page.off-canvas')
        @else
            @yield('off-canvas')
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
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const navCollapse = document.querySelector('.navbar-collapse');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (navCollapse.classList.contains('show')) {
                        navCollapse.classList.remove('show');
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var offcanvasElement = document.getElementById('offcanvasNavbar');
            var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            var navLinks = offcanvasElement.querySelectorAll('.nav-link');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    offcanvas.hide();
                });
            });
        });

        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '.navbar-example3'
        });

        // Handle the activation of the tab when a nav-link is clicked
        $('.navbar-example3 .nav-link').on('click', function() {
            var target = $(this).attr('href');
            $('.btn-tab').removeClass('active');
            $('.tab-pane').removeClass('show active');
            $(`.btn-tab[data-bs-target="${target}"]`).addClass('active');
            $(target).addClass('show active');
            if (target === '#kirim-barang') {
                $('#tiket').addClass('bg-header');
            } else {
                $('#tiket').removeClass('bg-header');
            }
            if (target != '#pesan-tiket' && target != '#kirim-barang' && target != '#sewa-bus') {
                $(`.btn-tab[data-bs-target="#pesan-tiket"]`).addClass('active');
                $('#pesan-tiket').addClass('show active');
            }
        });

        $(document).ready(function() {
            // Initialize Bootstrap Carousel
            $('#carouselExampleIndicators').carousel();

            // $('.btn_back').on('click', function() {
            //     let previousUrl = "{{ url()->previous() }}";
            //     let currentUrl = window.location.href;

            //     window.location.href = url;
            //     if (previousUrl === currentUrl) {
            //         window.location.href = '/';
            //     } else {
            //         window.location.href = previousUrl;
            //     }
            // })
        });
    </script>
</body>

</html>
