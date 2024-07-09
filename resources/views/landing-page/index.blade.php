@extends('landing-page.layouts')

@push('styles')
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <style>
        .input-group-append {
            cursor: pointer;
        }
    </style>
@endpush
@section('content')
    {{-- <div class="body-wrapper overflow-hidden"> --}}
    <section class="hero-section position-relative overflow-hidden mb-2 mt-3 mb-lg-11 py-3">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                        aria-label="Slide 7"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_3403-qqouq5t272dh61t6ujsqn7u6ylvlj3yxd9zjgjbusg.png"
                            class="d-block w-100" alt="IMG_3403">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_8389-qqouq9keyeimghnq8lf8x6w1c5d2dwdupslhdn6a3k.jpeg"
                            class="d-block w-100" alt="IMG_8389">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/8298ae13-6707-49ba-ba1a-04d239cf07ba-qqouqai958jws3md33tvhonhxj8fllhl1x8yux4vxc.jpg"
                            class="d-block w-100" alt="8298ae13-6707-49ba-ba1a-04d239cf07ba">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/b4dd4132-d1b1-42ce-b30d-17f69c079ff7-qqouqbg3c2l73pkzxm8i26eyix3stalbe1wgc73hr4.jpg"
                            class="d-block w-100" alt="b4dd4132-d1b1-42ce-b30d-17f69c079ff7">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/c6b94d66-e547-4261-82a0-941a630b9ae6-qqouqcdxiwmhfbjms4n4mo6f4az60zp1q6jxth23kw.jpeg"
                            class="d-block w-100" alt="c6b94d66-e547-4261-82a0-941a630b9ae6">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/f1ca43b9-2d31-4d58-9248-f32f58a15059-qqouqdbrpqnrqxi9mn1r75xvpouj8oss2b7far0peo.jpeg"
                            class="d-block w-100" alt="f1ca43b9-2d31-4d58-9248-f32f58a15059">
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_3399-qqouqe9lwkp22jgwh5gdrnpcb2pwgdwiefuws0zb8g.jpg"
                            class="d-block w-100" alt="IMG_3399">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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
                            <span class="d-none d-md-block ms-2"> Pesan Tiket</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#kirim-barang" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-truck"></i>
                            <span class="d-none d-md-block ms-2"> Kirim Barang</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#sewa-bus" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-bus"></i>
                            <span class="d-none d-md-block ms-2"> Sewa Bus</span>
                        </button>
                    </li>
                </ul>
                <div class="card-body">
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
                                                <button id="btnSearch" class="btn btn-warning w-100" type="submit">
                                                    <i class="fas fa-search"></i> Cari Tiket
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
                            <!-- Content for Kirim Barang -->
                            <img src="{{ asset('landingpage/dist/images/svgs/seat.svg')}}"
                            alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                            <!-- Content for Sewa Bus -->
                            {{-- <img src="{{ asset('landingpage/dist/images/svgs/seat1.svg')}}"
                            alt="" class="img-fluid"> --}}
                            <svg width="631" height="609" viewBox="0 0 631 609" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.5" y="66.5" width="536" height="427" rx="23.5" fill="#D9D9D9" stroke="black" stroke-width="5"/>
                                <rect x="61.5" y="2.5" width="398" height="64" fill="#D9D9D9" stroke="black" stroke-width="5"/>
                                <path d="M61.5 494.5H459.5V606.5H83C71.1259 606.5 61.5 596.874 61.5 585V494.5Z" fill="#D9D9D9" stroke="black" stroke-width="5"/>
                                <path d="M320.5 550C320.5 573.06 302.903 591.5 281.5 591.5C260.097 591.5 242.5 573.06 242.5 550C242.5 526.94 260.097 508.5 281.5 508.5C302.903 508.5 320.5 526.94 320.5 550Z" fill="#868686" stroke="black" stroke-width="5"/>
                                <path d="M225.5 550C225.5 573.06 207.903 591.5 186.5 591.5C165.097 591.5 147.5 573.06 147.5 550C147.5 526.94 165.097 508.5 186.5 508.5C207.903 508.5 225.5 526.94 225.5 550Z" fill="#868686" stroke="black" stroke-width="5"/>
                                <circle cx="105.5" cy="550.5" r="24" fill="#868686" stroke="black" stroke-width="5"/>
                                <path d="M2 148L421.567 181L537.135 148" stroke="black" stroke-width="5"/>
                                <path d="M2 419L421.567 386L537.135 419" stroke="black" stroke-width="5"/>
                                <path d="M323 496C323 496 342.503 351.995 341.99 283.5C341.477 215.004 323 64 323 64" stroke="black" stroke-width="5"/>
                                <line x1="172.5" y1="159" x2="172.5" y2="405" stroke="black" stroke-width="5"/>
                                <line y1="-2.5" x2="236.247" y2="-2.5" transform="matrix(0.00846573 0.999964 -0.999967 0.00806743 232 166.81)" stroke="black" stroke-width="5"/>
                                <line y1="-2.5" x2="223.557" y2="-2.5" transform="matrix(0.00879271 0.999961 -0.999965 0.00837902 295 171.69)" stroke="black" stroke-width="5"/>
                                <line x1="370.5" y1="177.977" x2="372.491" y2="390.977" stroke="black" stroke-width="5"/>
                                <line x1="392.5" y1="180.963" x2="395.529" y2="387.963" stroke="black" stroke-width="5"/>
                                <line x1="415.5" y1="179.964" x2="418.5" y2="385.964" stroke="black" stroke-width="5"/>
                                <path d="M455.577 77.8071C456.507 69.1597 464.556 63.5 474.056 63.5H560.006C568.41 63.5 576.019 67.9443 579.6 75.3651C593.663 104.512 624.927 179.828 628.001 278.578C631.119 378.739 595.41 454.767 579.885 482.861C576.167 489.588 568.968 493.5 561.107 493.5H473.801C464.378 493.5 456.639 487.897 456.334 479.506C455.841 465.941 459.789 444.601 482.3 421.235C522.531 379.476 528.453 318.085 527.499 278.44C527.017 258.374 521.576 229.995 512.326 202.454C503.088 174.946 489.934 147.923 473.821 130.787C456.001 111.836 454.107 91.4672 455.577 77.8071Z" fill="#D9D9D9" stroke="black" stroke-width="5"/>
                                </svg>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="hero-section position-relative overflow-hidden mb-2 mt-3 mb-lg-11 py-3 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="hero-content my-11 my-xl-0">
                        <h6 class="d-flex align-items-center gap-2 fs-4 fw-semibold mb-3" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1000"><i
                                class="ti ti-rocket text-secondary fs-6"></i>PT Aneka Mulia Transport</h6>
                        <h1 class="fw-bolder mb-8 fs-13" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000">Tentang <span class="text-primary"> Kami</span></h1>
                        <p class="fs-5 mb-5 text-dark fw-normal text-md-start" data-aos="fade-up" data-aos-delay="600"
                            data-aos-duration="1000">PT Aneka Mulia Transport adalah perusahaan penyedia jasa
                            transportasi umum yang berdiri sejak tahun 2016. kami selalu mengedepankan
                            kenyamanan para penumpang, dibuktikan dengan jenis armada kami yang terbaik di
                            kelasnya yaitu <span class="text-primary fw-bold text-md-start"> Suite Class, Premier Ultimate Class, Premium Executive Class,
                            dan Executive Class.</span></p>
                        <div class="d-sm-flex align-items-center gap-3" data-aos="fade-up"
                            data-aos-delay="800" data-aos-duration="1000">
                            <a class="btn btn-primary px-5 btn-hover-shadow d-block mb-3 mb-sm-0 btn-lg"
                                href="#">Lebih Lanjut</a>
                            <a class="btn btn-outline-primary d-block scroll-link btn-lg"
                                href="#production-template">Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="hero-img-slide position-relative bg-light-primary p-4 rounded">
                        <div class="d-flex flex-row">
                            <div class="">
                                <div class="banner-img-1 slideup">
                                    <img src="https://preview2.project-webcare.com/wp-content/uploads/2024/07/8298ae13-6707-49ba-ba1a-04d239cf07ba.jpg"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="banner-img-1 slideup">
                                    <img src="../landingpage/dist/images/hero-img/bannerimg1.svg"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="">
                                <div class="banner-img-2 slideDown">
                                    <img src="../landingpage/dist/images/hero-img/bannerimg2.svg"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="banner-img-2 slideDown">
                                    <img src="../landingpage/dist/images/hero-img/bannerimg2.svg"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch
                        quickly
                        with Modernize</h2>
                </div>
            </div>
            <div class="sliding-wrapper position-relative overflow-hidden">
                <div class="slide-background d-flex flex-row w-100">
                    <div class="slide">
                        <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                            height="100%">
                    </div>
                    <div class="slide">
                        <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                            height="100%">
                    </div>
                    <div class="slide">
                        <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                            height="100%">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="review-section pt-5 pt-lg-10 pt-xl-12 pb-8 pb-lg-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">Kenapa Anda Harus Memiliki Kami
                    </h2>
                </div>
            </div>
            <div class="review-slider" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        {{-- <i class="fas fa-users"></i> --}}
                                        <img src="{{ asset('dist/images/backgrounds/gold.png') }}" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Keunggulan Kami</h6>
                                            <p class="mb-0 text-dark">Kami Berikan yang terbaik</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">Kru Bus yang berpengalaman dan ramah. Supir yang
                                    berpengalaman, serta pelayanan yang baik dan keramahan kru disetiap bus,
                                    akan menemani anda sepanjang perjalanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('dist/images/backgrounds/rocket.png') }}" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Armada Bus Terbaru Dan Terbaik
                                            </h6>
                                            <p class="mb-0 text-dark">Kami berikan yang terbaik</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">Dukungan perusahaan ternama dan terbaik di
                                    dunia, Scania dan Mercedes Benz menjadikan Aneka Transport menjadi yang
                                    terbaik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Fasilitas Yang Lengkap Dan Bersih
                                            </h6>
                                            <p class="mb-0 fw-normal">Kami berikan yang terbaik</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 text-dark mb-0">Kabin yang bersih, fasilitas yang steril, serta
                                    keamanan menjadi perhatian kami untuk menemani perjalanan anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('dist/images/backgrounds/piggy.png') }}" alt=""
                                            class="w-auto me-3 rounded-circle" width="40" height="40">
                                        <div>
                                            <h6 class="fs-4 mb-1 fw-semibold">Harga Terjangkau</h6>
                                            <p class="mb-0 text-dark">Kami berikan yang terbaik</p>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="fs-4 mb-0 text-dark">Memberikan harga yang ramah di kantong dan tetap
                                    mengutamakan kenyamanan dan keamanan penumpang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <small class="text-primary fw-bold mb-2 d-block fs-3">KANTOR PERWAKILAN KAMI</small>
                        <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Kantor Perwakilan Aneka</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block fas fa-bus text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Kantor Perwakilan Makassar (Khusus Rute Makassar-Mamuju-Palopo)
                        </h5>
                        <p class="mb-0 text-dark text-center">Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.
                        </p>
                        <p class="mb-0 text-dark">Telp : <text class="text-primary"> +62 81244676434</text></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block fas fa-bus text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Kantor Perwakilan Makassar (Khusus Rute Makassar-Selayar) </h5>
                        <p class="mb-0 text-dark text-center">Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.
                        </p>
                        <p class="mb-0 text-dark">Telp : <text class="text-primary"> +62 81244676434</text></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-archive text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">425+ Page Templates</h5>
                        <p class="mb-0 text-dark">Yes, we have 5 demos & 79+ Pages per demo to make it easier.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                        <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize Admin
                            Pack.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-tag text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                        <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive layout.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-diamond text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">200+ Font Icons</h5>
                        <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                            Elegant Admin.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                        <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                            widely tested.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-database text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                        <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                        <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                        <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                            Charts.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                        <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-refresh text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                        <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-book text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                        <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-calendar text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                        <p class="mb-0 text-dark">Calendar is available with our package & in nice design.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                    data-aos-duration="1000">
                    <div class="text-center mb-5">
                        <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                        <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                        <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card c2a-box" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000">
                        <div class="card-body text-center p-4 pt-8">
                            <h3 class="fs-7 fw-semibold pt-6">Haven't found an answer to your question?</h3>
                            <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                            <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                    class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow" type="button">Ask on
                                    Discord</a>
                                <a href="https://adminmart.com/support" target="_blank"
                                    class="btn btn-outline-secondary d-block" type="button">Submit
                                    Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="bg-primary pt-5 pt-xl-9 pb-8">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 col-xl-5 pt-lg-5 mb-5 mb-lg-0">
                    <h2 class="fs-12 text-white text-center text-lg-start fw-bolder mb-8">Build your app with
                        our highly
                        customizable Bootstrap based Dashboard</h2>
                    <div
                        class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                        <a href="../package/html/main/authentication-login.html"
                            class="btn bg-white text-primary fw-semibold d-block mb-3 mb-sm-0 btn-hover-shadow">Login</a>
                        <a href="../package/html/main/authentication-register.html"
                            class="btn border-white text-white fw-semibold btn-hover-white d-block">Register</a>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="text-center text-lg-end">
                        <img src="../landingpage/dist/images/backgrounds/business-woman-checking-her-mail.png"
                            alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- </div> --}}
@endsection
@push('scripts')
    <!-- current page js files -->
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../../dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../dist/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script>

    <script type="text/javascript">
        $('#tanggal_jadwal_keberangkatan').datepicker({
            language: 'id',
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush
