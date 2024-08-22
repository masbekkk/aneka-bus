@extends('layouts.layouts')

@push('styles')
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide-core.min.css') }}">

    <style>
        .input-group-append {
            cursor: pointer;
        }

        .hero-section {
            position: relative;
            background: url('/images/Bus Design 1.png') no-repeat center center/cover;
            padding: 150px 0; 
            color: white;
        }

        .hero-title {
            color: white; 
            font-size: 3rem; 
            font-weight: bolder; 
            margin-bottom: 1rem;
        }

        .card-kirim {
            background-color: rgba(0, 47, 95, 0.8); 
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px; 
        }

        .nav-pills .nav-link {
            color: white;
            font-size: 1.2rem;
        }

        .nav-pills .nav-link.active {
            background-color: #ff5733;
            color: white;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: rgba(75, 114, 137, 0.8); /* Transparansi */
            border: none;
            color: white;
        }

        .btn-tab {
            background-color: transparent;
            border: none;
            color: white;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-tab.active, .btn-tab:hover {
            background-color: #ff5733;
        }

        .bg-header {
            background-color: rgba(0, 47, 95, 0.8);
        }

        .btn-search {
            background-color: #ff5733;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }

        .btn-search:hover {
            background-color: #e74c3c;
        }

        .input-group-text {
            background-color: #ff5733;
            border: none;
            color: white;
        }

        .form-section-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: white;
        }

        .form-section-subtitle {
            margin-bottom: 20px;
            font-size: 1rem;
            color: white;
        }

        .form-control::placeholder {
            color: #d1d1d1;
        }
    </style>
@endpush

@section('content')
    <section class="hero-section position-relative overflow-hidden">
        <div class="container">
            <h2 class="mb-3 hero-title">Aneka Bus Antar Kota</h2>
            <div class="card border-primary card-kirim">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active btn-tab" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pesan-tiket" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-ticket-alt"></i>
                            <span class=" ms-2"> Pesan Tiket</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 btn-tab" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#kirim-barang" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-truck"></i>
                            <span class=" ms-2"> Kirim Barang</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 btn-tab" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#sewa-bus" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-bus"></i>
                            <span class=" ms-2"> Sewa Bus</span>
                        </button>
                    </li>
                </ul>

                <div class="card-body" id="tiket">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel" aria-labelledby="pesan-tiket-tab">
                            <div class="form-section-title">Pesan Tiket</div>
                            <div class="form-section-subtitle">Pilih Tanggal dan Lokasi Keberangkatan serta Destinasi Perjalananmu disini</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="lokasi_dari">Lokasi Dari</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" id="lokasi_dari">
                                            <option value="">Pilih Lokasi</option>
                                            <!-- Add your options here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="lokasi_tujuan">Lokasi Tujuan</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" id="lokasi_tujuan">
                                            <option value="">Pilih Lokasi</option>
                                            <!-- Add your options here -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="tanggal_keberangkatan" placeholder="Pilih Tanggal">
                                        <button class="btn input-group-text" id="tanggal_keberangkatan_button">
                                            <i class="fas fa-calendar-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-search">Cari Tiket</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
                            @include('landing-page.kirim-barang')
                        </div>
                        <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                            @include('landing-page.sewa-bus')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing-page.section')
@endsection

@push('scripts')
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js"></script>
    <script src="{{ asset('splide-4.1.3/dist/js/splide.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Memastikan saat tombol kalender diklik, datepicker terbuka
            $('#tanggal_keberangkatan_button').on('click', function() {
                $('#tanggal_keberangkatan').focus();
            });

            // Inisialisasi datepicker
            $('#tanggal_keberangkatan').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd',
                startDate: new Date()
            });

            // Handling perubahan tab
            $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
                var target = $(e.target).attr("data-bs-target");
                if (target === '#kirim-barang') {
                    $('#tiket').addClass('bg-header');
                } else {
                    $('#tiket').removeClass('bg-header');
                }
            });

            // Inisialisasi Splide
            var splide = new Splide('.splide', {
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
            });

            splide.mount();
            AOS.init();
        });
    </script>
@endpush
