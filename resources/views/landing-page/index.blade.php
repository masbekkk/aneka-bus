@extends('layouts.layouts')

@push('styles')
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('slick/slick.css?v=' . bin2hex(random_bytes(20))) }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css?v=' . bin2hex(random_bytes(20))) }}">

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

        .image-slick {
            height: 20rem;
            /* Set your desired height */
            width: auto;
            border-radius: 1.5rem;
            /* Adjust width to maintain aspect ratio */
        }

        /* .container { margin: 50px auto; max-width: 960px; } */
    </style>
@endpush
@section('content')
    {{-- <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2"
        tabindex="0"> --}}
    <section class="hero-section position-relative overflow-hidden">
        <div class="container">
            <section class="variable slider">
                <div>
                    <img src="{{ asset('images/carousel/carousel-1.jpg') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-2.jpg') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-3.jpeg') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-4.jpeg') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-5.JPG') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-6.PNG') }}" class="image-slick">
                </div>
                <div>
                    <img src="{{ asset('images/carousel/carousel-7.jpeg') }}" class="image-slick">
                </div>
            </section>
        </div>
    </section>
    <section class="production pb-10 pb-md-14 py-3" id="production-template">
        <div class="container">
            <!--  Row 1 -->
            <div class="card border-primary">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pesan-tiket" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-ticket-alt"></i>
                            <span class=" ms-2"> Pesan Tiket</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#kirim-barang" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-truck"></i>
                            <span class=" ms-2"> Kirim Barang</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
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
    <script src="{{ asset('slick/slick.js?v=' . bin2hex(random_bytes(20))) }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".variable").slick({
                dots: true,
                infinite: true,
                variableWidth: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                centerPadding: '60px',
                arrows: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ],
                init: function(event, slick) {
                    // Refresh AOS after Slick initialization
                    AOS.refresh();
                }
            });
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
