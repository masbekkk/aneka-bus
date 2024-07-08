@extends('landing-page.layouts')
@push('styles')
    <style>
        .card-custom {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .price {
            color: #A52A2A;
            font-size: 1.2rem;
        }

        .availability {
            color: #000;
            font-size: 0.9rem;
        }

        .icons {
            font-size: 1.2rem;
        }

        .timeline {
            position: relative;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 15px;
            height: 100%;
            width: 2px;
            background: #007bff;
        }

        .timeline-item {
            position: relative;
            padding-left: 35px;
            margin-bottom: 20px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 10px;
            width: 10px;
            height: 10px;
            background: #007bff;
            border-radius: 50%;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
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
    </style>
@endpush
@section('content')
<section class="production pb-10 pb-md-14 py-3" id="production-template">
    <div class="container">
        <div class="card">
            <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active"
                        id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#detail-keberangkatan" type="button"
                        role="tab" aria-controls="pills-account" aria-selected="true">
                        <i class="fas fa-ticket-alt"></i>
                        <span class="d-none d-md-block ms-2"> Detail Keberangkatan</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                        id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#terms" type="button" role="tab"
                        aria-controls="pills-account" aria-selected="true">
                        <i class="fas fa-truck"></i>
                        <span class="d-none d-md-block ms-2"> Syarat dan Ketentuan</span>
                    </button>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="detail-keberangkatan" role="tabpanel"
                        aria-labelledby="detail-keberangkatan-tab">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="card card-custom shadow-sm bg-white mb-3 p-4 w-100 rounded">
                                    <div class="mb-2 row">
                                        <div class="col">
                                            <div class="fw-bold text-lg">{{ $ticket->type_bus->name }}</div>
                                        </div>
                                        <div class="col text-end text-lg fw-bold">
                                            Rp. {{ $ticket->price }}
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="fw-bold text-red-700 my-2">Rabu, 3 Juli 2024</div>
                                    <div class="mb-2">
                                        <div class="timeline">
                                            <div class="timeline-item">
                                                <div class="fw-bold">{{ $ticket->departure_time }}
                                                    {{ $ticket->source->route_name }}</div>
                                                <div class="text-muted">{{ $ticket->boarding_location }}</div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="fw-bold">{{ $ticket->arrive_time }} -
                                                    {{ $ticket->destination->route_name }}</div>
                                                <div class="text-muted">{{ $ticket->drop_location }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="fw-bold text-red-700 my-2">Fasilitas</div>
                                    <div class="row mb-2 mt-2">
                                        <div class="col-6 d-flex align-items-center mb-2">
                                            <i class="fas fa-snowflake text-gray-400 me-2"></i> Air Conditioning
                                        </div>
                                        <div class="col-6 d-flex align-items-center mb-2">
                                            <i class="fas fa-briefcase text-gray-400 me-2"></i> Free Bagasi 20Kg
                                        </div>
                                        <div class="col-6 d-flex align-items-center mb-2">
                                            <i class="fas fa-plug text-gray-400 me-2"></i> Usb Charger
                                        </div>
                                        <div class="col-6 d-flex align-items-center mb-2">
                                            <i class="fas fa-cheese text-gray-400 me-2"></i> Snack Box
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                        <!-- Content for Kirim Barang -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom fixed-bottom-custom d-flex align-items-center">
        <div class="container w-100 w-sm-400 mx-auto">
            <div class="p-container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="price-text">
                            Rp {{ $ticket->price }}
                            <span class="price-subtext">/Kursi</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <a href="/pilih-kursi" class="btn btn-danger w-100" type="button">Pilih Kursi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <!-- current page js files -->

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $('#tanggal_jadwal_keberangkatan').datepicker();
    </script> --}}
@endpush
