@extends('admin.index')

@push('style')
    <!-- Datatable css -->
    <link rel="stylesheet" href="../../dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css">
    <!-- Custom CSS -->
    <style>
        /* Example custom styles */
        .nav-pills .nav-link {
            background-color: #f8f9fa;
            border-radius: 5px;
            margin: 0 5px;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 0;
        }

        .btn-search {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
        }

        .btn-search:hover {
            background-color: #218838;
        }

        .card {
            border: 2px solid #007bff;
            border-radius: 10px;
        }
    </style>
@endpush

@section('title')
    Order Offline
@endsection

@section('main')
    <div class="container">
        <!-- Card Wrapper -->
        <div class="card border-primary">
            <!-- Navigation Pills -->
            <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pesan-tiket" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                        <i class="fas fa-ticket-alt"></i>
                        <span class="d-none d-md-block ms-2"> Pesan Tiket</span>
                    </button>
                </li>
            </ul>

            <!-- Card Body -->
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel" aria-labelledby="pesan-tiket-tab">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="card w-100 position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                                        <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi Keberangkatan serta Destinasi Perjalananmu disini</p>

                                        <!-- Form Start -->
                                        <form class="mt-3" action="{{ route('admin-order.index') }}" method="GET" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="lokasi_dari_id" class="form-label">Lokasi Dari</label>
                                                    <select class="form-select" name="source" id="lokasi_dari_id" required>
                                                        @foreach ($routes as $route)
                                                            <option value="{{ $route->id }}">
                                                                {{ $route->route_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lokasi_tujuan_id" class="form-label">Lokasi Tujuan</label>
                                                    <select class="form-select" name="destination" id="lokasi_tujuan_id" required>
                                                        @foreach ($routes as $route)
                                                            <option value="{{ $route->id }}">
                                                                {{ $route->route_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="tanggal_jadwal_keberangkatan" class="form-label">Tgl. Keberangkatan</label>
                                                <div class="input-group date" id="tanggal_jadwal_keberangkatan">
                                                    <input type="text" class="form-control" name="tgl" id="date" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <button id="btnSearch" class="btn btn-search" type="submit">
                                                    <i class="fas fa-search"></i> Cari Tiket
                                                </button>
                                            </div>
                                        </form>
                                        <!-- Form End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Other Tabs Go Here -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="../../dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../dist/js/datatable/index.js"></script>
@endpush
