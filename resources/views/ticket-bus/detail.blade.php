@extends('layouts.layouts')
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
            background: #d39409;
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
            background: #d39409;
            border-radius: 50%;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .chevron-icon {
            transition: transform 0.3s;
        }

        .chevron-icon.collapsed {
            transform: rotate(0deg);
        }

        .chevron-icon:not(.collapsed) {
            transform: rotate(180deg);
        }
    </style>
@endpush
@section('fixed-header')
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-header">
            <div class="container-sm">
                <div class="d-flex justify-content-start align-items-center w-100">
                    <a href="" class="btn_back">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="white" />
                        </svg>
                    </a>
                    <div class="text-lg text-white px-3 fw-bolder">Detail Pemesanan</div>
                </div>
            </div>
        </nav>
    </header>
@endsection
@section('content')
    <section class="production pb-10 pb-md-14 py-3" id="production-template" style="background-color: #fbfafc">
        <div class="container">
            <div class="card">
                <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#detail-keberangkatan"
                            type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-ticket-alt"></i>
                            <span class="fw-bold ms-2"> Detail Keberangkatan</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                            id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#terms" type="button"
                            role="tab" aria-controls="pills-account" aria-selected="true">
                            <i class="fas fa-truck"></i>
                            <span class="fw-bold ms-2"> Syarat dan Ketentuan</span>
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
                                                <div class="fw-bold text-lg text-dark">{{ $ticket->type_bus->name }}</div>
                                            </div>
                                            <div class="col text-end text-lg fs-6 fw-bolder text-dark">
                                                Rp. {{ Number::format($ticket->price, locale: 'id') }}
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                        <div class="fw-bolder text-dark text-red-700 my-2 departure_date"></div>
                                        <div class="mb-2">
                                            <div class="timeline">
                                                <div class="timeline-item">
                                                    <div class="fw-bold text-dark">{{ $ticket->departure_time }}
                                                        {{ $ticket->source->route_name }}</div>
                                                    <div class="text-dark fst-italic">{{ $ticket->boarding_location }}</div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="fw-bold text-dark">{{ $ticket->arrive_time }} -
                                                        {{ $ticket->destination->route_name }}</div>
                                                    <div class="text-dark fst-italic">{{ $ticket->drop_location }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                        <div class="fw-bold my-2 text-dark">Fasilitas</div>
                                        <div class="row mb-2 mt-2 text-dark">
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-snowflake text-gray-400 me-2"></i> Air Conditioner
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-plug text-gray-400 me-2"></i> USB Charger
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-cubes text-gray-400 me-2"></i> Snack Box
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-tablet-alt text-gray-400 me-2"></i> Android tablet
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-bed text-gray-400 me-2"></i> Blanket + Pillow
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-video text-gray-400 me-2"></i> CCTV
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-briefcase text-gray-400 me-2"></i> Bagasi
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                            <!-- Content TNC -->
                            @include('ticket-bus.tnc')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('fixed-footer')
    <div class="fixed-bottom fixed-bottom-custom d-flex align-items-center">
        <div class="container w-100 w-sm-400 mx-auto">
            <div class="p-container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="price-text">
                            Rp {{ Number::format($ticket->price, locale: 'id') }}
                            <span class="price-subtext">/Kursi</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('choose-seat.ticket-bus', ['id' => $ticket->id]) }}"
                            class="btn btn-primary w-100 text-white fw-bolder" type="button">Pilih Kursi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            let departure_date = new Date('{{ $ticket->departure_date }}');

            function formatDate(date) {
                return new Intl.DateTimeFormat('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                }).format(date);
            }
            $('.departure_date').text(formatDate(departure_date))

            $('[data-bs-toggle="collapse"]').on('click', function() {
                var chevron = $(this).find('.chevron-icon');
                chevron.toggleClass('collapsed');
            });

            // Adjust chevron direction when collapse state changes
            $('#collapseExample').on('shown.bs.collapse', function() {
                $('[href="#collapseExample"], [data-bs-target="#collapseExample"]').find('.chevron-icon')
                    .removeClass('collapsed');
            }).on('hidden.bs.collapse', function() {
                $('[href="#collapseExample"], [data-bs-target="#collapseExample"]').find('.chevron-icon')
                    .addClass('collapsed');
            });
        })
    </script>
    <!-- current page js files -->

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $('#tanggal_jadwal_keberangkatan').datepicker();
    </script> --}}
@endpush
