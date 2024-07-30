@extends('layouts.layouts')

@push('styles')
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('slick/slick.css?v=' . bin2hex(random_bytes(20))) }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css?v=' . bin2hex(random_bytes(20))) }}"> --}}
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide-core.min.css') }}">

    <style>
        .input-group-append {
            cursor: pointer;
        }

        .owl-carousel .item {
            display: flex;
            flex-direction: column;
        }

        .card-container {
            flex: 1;
            display: flex;
        }

        .card {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .custom-caption {
            background: rgba(0, 0, 0, 0.5);
            /* Black background with 50% opacity */
            padding: 10px;
            /* Add some padding for better appearance */
            border-radius: 5px;
            /* Optional: Add rounded corners */
        }

        .slider {
            width: 100%;
            margin: 50px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }

        .custom-card {
            max-width: 400px;
            /* Set a max-width for the card to match the image */
            margin: 10px auto;
            /* Center the card within its container */
        }

        /* Basic styles for the image */
        .custom-image {
            width: 100%;
            height: auto;
            max-width: 400px;
            /* Set a max-width for the image */
            display: block;
            margin: 10 auto;
            border-radius: 1rem;
            /* Center the image within the card */
        }

        /* Mobile styles */
        @media (max-width: 767px) {

            .custom-card,
            .custom-image {
                max-width: 100%;
                border-radius: 1rem;
                /* Allow the card and image to take full width on mobile */
            }
        }

        .slideInLeft {
            animation: slideInLeft 1s forwards;
        }

        .slideInRight {
            animation: slideInRight 1s forwards;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col {
            /* flex: 1 1 50%; Allows the column to grow and wrap */
            padding: 10px;
            box-sizing: border-box;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 210px;
        }

        .card-body {
            flex-grow: 1;
        }

        /* .container { margin: 50px auto; max-width: 960px; } */
    </style>
@endpush
@section('content')
    {{-- <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2"
        tabindex="0"> --}}
    <section class="hero-section position-relative overflow-hidden">
        @php
            $carousel = range(1, 15);
        @endphp
        <div class="container">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($carousel as $img)
                            <li class="splide__slide"><img src="{{ asset('images/landing-page/' . $img . '.jpeg') }}"
                                    class="image-slick" alt="Slide 1">
                            </li>
                        @endforeach
                        {{-- <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-1.jpg') }}"
                                class="image-slick" alt="Slide 1">
                        </li> --}}
                        {{-- <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-2.jpg') }}" class="image-slick" alt="Slide 2">
                        </li>
                        <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-3.jpeg') }}" class="image-slick" alt="Slide 3">
                        </li>
                        <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-3.jpeg') }}" class="image-slick" alt="Slide 4">
                        </li>
                        <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-5.JPG') }}" class="image-slick" alt="Slide 5">
                        </li>
                        <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-6.PNG') }}" class="image-slick" alt="Slide 5">
                        </li>
                        <li class="splide__slide"><img src="{{ asset('images/carousel/carousel-7.jpeg') }}" class="image-slick" alt="Slide 5">
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="production pb-10 pb-md-14 py-3" id="production-template">
        <div class="container">
            <!--  Row 1 -->
            <div class="card border-primary card-kirim">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active btn-tab active"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pesan-tiket" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-ticket-alt"></i>
                            <span class=" ms-2"> Pesan Tiket</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 btn-tab"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#kirim-barang" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-truck"></i>
                            <span class=" ms-2"> Kirim Barang</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 btn-tab"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#sewa-bus" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-bus"></i>
                            <span class=" ms-2"> Sewa Bus</span>
                        </button>
                    </li>
                </ul>

                <div class="card-body" id="tiket">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel"
                            aria-labelledby="pesan-tiket-tab">
                            @include('landing-page.cari-tiket')
                        </div>
                        <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
                            <!-- Content for Kirim Barang -->
                            @include('landing-page.kirim-barang')
                        </div>
                        <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                            <!-- Content for Sewa Bus -->
                            @include('landing-page.sewa-bus')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landing-page.section')
    {{-- </div> --}}
@endsection
@push('scripts')
    <!-- current page js files -->
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    {{-- <script src="{{ asset('slick/slick.js?v=' . bin2hex(random_bytes(20))) }}"></script> --}}
    <script src="{{ asset('splide-4.1.3/dist/js/splide.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
                var target = $(e.target).attr("data-bs-target");
                if (target === '#kirim-barang') {
                    $('#tiket').addClass('bg-header');
                } else {
                    $('#tiket').removeClass('bg-header');
                }
            });
            var splide = new Splide('.splide', {
                // type: 'loop',
                type: 'loop',
                perPage: 3,
                autoplay: true,
                breakpoints: {
                    1024: {
                        perPage: 2,
                    },
                    768: {
                        perPage: 1,
                    }
                }

                // padding: '5rem',
            });

            splide.mount();
            // $(".variable").slick({
            //     dots: true,
            //     infinite: true,
            //     variableWidth: true,
            //     slidesToShow: 3,
            //     slidesToScroll: 1,
            //     autoplay: true,
            //     autoplaySpeed: 2000,
            //     mobileFirst: true,
            //     centerMode: true,
            //     centerPadding: '60px',
            //     arrows: true,
            //     responsive: [{
            //             breakpoint: 768,
            //             settings: {
            //                 arrows: false,
            //                 centerMode: true,
            //                 centerPadding: '40px',
            //                 slidesToShow: 3
            //             }
            //         },
            //         {
            //             breakpoint: 480,
            //             settings: {
            //                 arrows: false,
            //                 centerMode: true,
            //                 centerPadding: '40px',
            //                 slidesToShow: 1
            //             }
            //         }
            //     ],
            //     init: function(event, slick) {
            //         // Refresh AOS after Slick initialization
            //         AOS.refresh();
            //     }
            // });
            // Initialize AOS
            AOS.init();

            // Refresh AOS on Slick Carousel after any change (just to be sure)
            $('.variable').on('setPosition', function() {
                AOS.refresh();
            });
            $('#tanggal_jadwal_keberangkatan').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd',
                startDate: new Date()
            });

        });
    </script>
@endpush
