@extends('layouts.index')
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
    <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="owl-carousel counter-carousel owl-theme">
            @for ($i = 1; $i <= 7; $i++)
                @php
                    $formatFile = '.jpg';
                    if ($i == 3 || $i == 4 || $i == 7) {
                        $formatFile = '.jpeg';
                    } elseif ($i == 6) {
                        $formatFile = '.PNG';
                    }
                @endphp
                <div class="item">
                    {{-- <div class="card border-0 zoom-in bg-light-primary shadow-none">
                        <div class="card-body">
                            <div class="text-center"> --}}
                    <img src="{{ asset('images/carousel/carousel-' . $i . $formatFile) }}" class="mb-3 w-100" alt=""
                        style="height: 200px;" />
                    {{-- <p class="fw-semibold fs-3 text-primary mb-1"> Employees </p>
                                <h5 class="fw-semibold text-primary mb-0">96</h5> --}}
                    {{-- </div>
                        </div>
                    </div> --}}
                </div>
            @endfor
        </div>
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pesan-tiket-tab" data-bs-toggle="tab"
                                    data-bs-target="#pesan-tiket" type="button" role="tab" aria-controls="pesan-tiket"
                                    aria-selected="true">
                                    <i class="fas fa-ticket-alt"></i> Pesan Tiket
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="kirim-barang-tab" data-bs-toggle="tab"
                                    data-bs-target="#kirim-barang" type="button" role="tab"
                                    aria-controls="kirim-barang" aria-selected="false">
                                    <i class="fas fa-truck"></i> Kirim Barang
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="sewa-bus-tab" data-bs-toggle="tab" data-bs-target="#sewa-bus"
                                    type="button" role="tab" aria-controls="sewa-bus" aria-selected="false">
                                    <i class="fas fa-bus"></i> Sewa Bus
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel"
                                aria-labelledby="pesan-tiket-tab">
                                <form class="mt-3" action="{{ route('tiket-bus.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="lokasi_dari_id" class="form-label">Lokasi Dari</label>
                                        <select class="form-select" name="route_source" id="lokasi_dari_id" required>
                                            @foreach ($routes as $route)
                                                <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lokasi_tujuan_id" class="form-label">Lokasi Tujuan</label>
                                        <select class="form-select" name="route_destination" id="lokasi_tujuan_id" required>
                                            @foreach ($routes as $route)
                                                <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_jadwal_keberangkatan" class="form-label">Tgl.
                                            Keberangkatan</label>
                                        <div class="input-group date" id="tanggal_jadwal_keberangkatan">
                                            <input type="text" class="form-control" id="date" />
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                        {{-- <input type="text" class="form-control" id="tanggal_jadwal_keberangkatan"
                                            placeholder="Tgl. Keberangkatan" value="03-07-2024" readonly required> --}}
                                    </div>
                                    <button id="btnSearch" class="btn btn-danger w-100" type="submit">
                                        <i class="fas fa-search"></i> Cari Tiket
                                    </button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
                                <!-- Content for Kirim Barang -->
                            </div>
                            <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                                <!-- Content for Sewa Bus -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <!-- current page js files -->
        <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
        <script src="../../dist/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../../dist/js/dashboard.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

        <script type="text/javascript">
            $('#tanggal_jadwal_keberangkatan').datepicker();
        </script>
    @endpush
