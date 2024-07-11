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
                                <div class="row">
                                    <div class="col-lg-12 d-flex align-items-stretch">
                                        <div class="card w-100 position-relative overflow-hidden">
                                            <div class="card-body p-4">
                                                <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                                                <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi
                                                    Keberangkatan serta Destinasi Perjalananmu disini</p>
                                                <form class="mt-3" action="{{ route('tiket-bus.index') }}" method="GET"
                                                    enctype="multipart/form-data">
                                                    {{-- @csrf --}}
                                                    <div class="mb-3">
                                                        <label for="lokasi_dari_id" class="form-label">Lokasi
                                                            Dari</label>
                                                        <select class="form-select" name="source" id="lokasi_dari_id"
                                                            required>
                                                            @foreach ($routes as $route)
                                                                <option value="{{ $route->id }}">
                                                                    {{ $route->route_name }}
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lokasi_tujuan_id" class="form-label">Lokasi
                                                            Tujuan</label>
                                                        <select class="form-select" name="destination"
                                                            id="lokasi_tujuan_id" required>
                                                            @foreach ($routes as $route)
                                                                <option value="{{ $route->id }}">
                                                                    {{ $route->route_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal_jadwal_keberangkatan" class="form-label">Tgl.
                                                            Keberangkatan</label>
                                                        <div class="input-group date" id="tanggal_jadwal_keberangkatan">
                                                            <input type="text" class="form-control" name="tgl"
                                                                id="date" />
                                                            <span class="input-group-append">
                                                                <span class="input-group-text bg-light d-block">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        {{-- <input type="text" class="form-control" id="tanggal_jadwal_keberangkatan"
                                                placeholder="Tgl. Keberangkatan" value="03-07-2024" readonly required> --}}
                                                    </div>
                                                    <button id="btnSearch" class="btn btn-primary w-100" type="submit">
                                                        <i class="fas fa-search"></i> Cari Tiket
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kirim-barang" role="tabpanel"
                                aria-labelledby="kirim-barang-tab">
                                <!-- Content for Kirim Barang -->
                                <div class="row el-element-overlay justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card overflow-hidden">
                                            <div class="el-card-item pb-3">
                                                <div
                                                    class="
                                          el-card-avatar
                                          mb-3
                                          el-overlay-1
                                          w-100
                                          overflow-hidden
                                          position-relative
                                          text-center
                                        ">
                                                    <a class="image-popup-vertical-fit"
                                                        href="{{ asset('images/kirim-barang.jpg') }}">
                                                        <img src="{{ asset('images/kirim-barang.jpg') }}"
                                                            class="d-block position-relative w-100" alt="user">
                                                    </a>
                                                </div>
                                                <div class="el-card-content text-center">
                                                    <h4 class="mb-0 fs-5 text-dark fw-bolder">Untuk mengirim barang
                                                        silahkan
                                                        menghubungi kami <a class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#wa_modal">DISINI</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Vertically centered scrollable modal -->
                                    <div class="modal fade in" tabindex="-1" role="dialog" id="wa_modal"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header d-flex align-items-center">
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        Hubungi Kami
                                                    </h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="mb-3">
                                                                <h5 class="mb-0 text-dark fw-bolder">KANTOR PERWAKILAN
                                                                    ANEKA
                                                                </h5>
                                                            </div>
                                                            <div class="list-group">
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action link-underline-warning"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2 "></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>

                                                            </div>

                                                            <div class="mb-3 mt-3">
                                                                <h5 class="mb-0 text-dark fw-bolder">KANTOR PERWAKILAN
                                                                    SEJAHTERA</h5>
                                                            </div>
                                                            <div class="list-group">
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>
                                                                <a href="https://wa.me/6281244676434"
                                                                    class="list-group-item list-group-item-action"
                                                                    aria-current="true">
                                                                    <i class="ti ti-inbox fs-4 me-2"></i>
                                                                    Kantor Perwakilan Makassar (Khusus Rute
                                                                    Makassar-Mamuju-Palopo)
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                                <!-- Content for Sewa Bus -->
                                <div id="carouselExampleCaptions" class="carousel slide carousel-dark">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/sewa-bus/838492f7-17a5-47a7-97d8-da4165240329.jpg') }}"
                                                class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-md-block custom-caption">
                                                <h5 class="text-white fw-bolder">Sewa Bus Aneka Sejahtera</h5>
                                                <p class="text-white fst-italic">Bepergian kemana saja dengan aman bersama
                                                    Aneka Transport dan Sejahtera Transport, dengan Kru dan Supir yang
                                                    berpengalaman memastikan perjalanan anda aman sampai tujuan.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/sewa-bus/b4dd4132-d1b1-42ce-b30d-17f69c079ff7.jpg') }}"
                                                class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-md-block custom-caption">
                                                <h5 class="text-white fw-bolder">Sewa Bus Aneka Sejahtera</h5>
                                                <p class="text-white fst-italic">Bepergian kemana saja dengan aman bersama
                                                    Aneka Transport dan Sejahtera Transport, dengan Kru dan Supir yang
                                                    berpengalaman memastikan perjalanan anda aman sampai tujuan.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/sewa-bus/c6b94d66-e547-4261-82a0-941a630b9ae6.jpg') }}"
                                                class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-md-block custom-caption">
                                                <h5 class="text-white fw-bolder">Sewa Bus Aneka Sejahtera</h5>
                                                <p class="text-white fst-italic">Bepergian kemana saja dengan aman bersama
                                                    Aneka Transport dan Sejahtera Transport, dengan Kru dan Supir yang
                                                    berpengalaman memastikan perjalanan anda aman sampai tujuan.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/sewa-bus/f1ca43b9-2d31-4d58-9248-f32f58a15059.jpg') }}"
                                                class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-md-block custom-caption">
                                                <h5 class="text-white fw-bolder">Sewa Bus Aneka Sejahtera</h5>
                                                <p class="text-white fst-italic">Bepergian kemana saja dengan aman bersama
                                                    Aneka Transport dan Sejahtera Transport, dengan Kru dan Supir yang
                                                    berpengalaman memastikan perjalanan anda aman sampai tujuan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div class="card card-body mt-3">
                                    <span class="side-stick"></span>
                                    <div class="note-content">
                                        <p class="note-inner-content fw-bolder text-dark" data-notecontent="">
                                            Kami menyediakan jasa sewa bus untuk :
                                        <ol class="text-dark fw-bold">
                                            <li>Perjalanan wisata</li>
                                            <li>Study tour</li>
                                            <li>Office Gathering</li>
                                        </ol>

                                        </p>
                                    </div>
                                    <h6 class="note-title w-75 mb-0"
                                        data-noteheading="Untuk penyewaan bus silahkan menghubungi kami di 👇🏻"> Untuk
                                        penyewaan bus silahkan menghubungi kami di 👇🏻 </h6>
                                    <div class="list-group mt-3 ">
                                        <a href="https://wa.me/6281244676434" target="_blank"
                                            class="list-group-item list-group-item-action text-dark text-nowrap mr-3"
                                            aria-current="true">
                                            <i class="ti ti-inbox fs-4 me-2 "></i>
                                            Sewa Bus Makassar-Mamuju-Palopo
                                        </a>
                                        <a href="https://wa.me/6281244676434" target="_blank"
                                            class="list-group-item list-group-item-action text-dark text-nowrap mr-3"
                                            aria-current="true">
                                            <i class="ti ti-inbox fs-4 me-2"></i>
                                            Sewa Bus Rute Makassar - Selayar
                                        </a>
                                    </div>
                                    <h6 class="note-title w-75 mb-0 mt-3"
                                        data-noteheading="Untuk rute lainnya juga dapat menghubungi nomor diatas."> Untuk
                                        rute lainnya juga dapat menghubungi nomor diatas. </h6>
                                </div>
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
                ]
            });
            $('#tanggal_jadwal_keberangkatan').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd',
                startDate: new Date()
            });

        });
    </script>
@endpush
