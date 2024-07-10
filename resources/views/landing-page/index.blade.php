@extends('layouts.layouts')

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
                                                    <select class="form-select" name="destination" id="lokasi_tujuan_id"
                                                        required>
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
                        <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
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
                                                <h4 class="mb-0 fs-5 text-dark fw-bolder">Untuk mengirim barang silahkan
                                                    menghubungi kami</h4>
                                                <button class="btn btn-lg btn-primary mt-3" data-bs-toggle="modal"
                                                    data-bs-target="#wa_modal">DISINI</button>
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
                                                            <h5 class="mb-0 text-dark fw-bolder">KANTOR PERWAKILAN ANEKA
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
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/sewa-bus/838492f7-17a5-47a7-97d8-da4165240329.jpg') }}"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-md-block">
                                            <h5 class="text-white fw-bolder">Sewa Bus Aneka Sejahtera</h5>
                                            <p class="text-white fst-italic">Bepergian kemana saja dengan aman bersama
                                                Aneka Transport dan Sejahtera Transport, dengan Kru dan Supir yang
                                                berpengalaman memastikan perjalanan anda aman sampai tujuan.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/sewa-bus/b4dd4132-d1b1-42ce-b30d-17f69c079ff7.jpg') }}"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/sewa-bus/c6b94d66-e547-4261-82a0-941a630b9ae6.jpg') }}"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/sewa-bus/f1ca43b9-2d31-4d58-9248-f32f58a15059.jpg') }}"
                                            class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
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
                                    <p class="note-inner-content text-dark" data-notecontent="">
                                        Kami menyediakan jasa sewa bus untuk :
                                    <ol class="text-dark">
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
                                    <a href="https://wa.me/6281244676434" target="_blank" class="list-group-item list-group-item-action text-dark text-nowrap mr-3"
                                        aria-current="true">
                                        <i class="ti ti-inbox fs-4 me-2"></i>
                                        Sewa Bus Rute Makassar - Selayar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <h5 class="fs-5 fw-semibold mt-8 text-center">Kantor Perwakilan Makassar (Khusus Rute
                            Makassar-Mamuju-Palopo)
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
@endsection
@push('scripts')
    <!-- current page js files -->
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
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
