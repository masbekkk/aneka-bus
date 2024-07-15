@extends('layouts.layouts')
@push('styles')
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('splide-4.1.3/dist/css/splide-core.min.css') }}">
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
                <div class="d-flex justify-content-between align-items-center w-100">
                    {{-- tiket-bus?source=1&destination=2&tgl=2024-07-18 --}}
                    <a
                        href="{{ route('tiket-bus.index', ['source' => $ticket->route_source, 'destination' => $ticket->route_destination, 'tgl' => $ticket->departure_date]) }}">
                        {!! include_svg('images/back.svg') !!}
                    </a>
                    <div class="text-white text-center">
                        <div class="fw-bolder">Detail Pemesanan
                        </div>
                        <div class="text-sm text-selected-date"></div>
                    </div>
                    <a href="/" class="btn btn-link p-0">
                        <i class="fas fa-house custom-icon" style="margin-right: 0.5rem !important;"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
@endsection
@section('content')
    @php
        $img = [
            '7bd02bcd-2cbb-462b-ad6f-db65aac75a1e.jpg',
            '1c69e78f-47ff-4ae9-aeef-be4857fd5cae.jpg',
            '2da335d2-c2d3-4114-ae2c-b1e55505d39d.jpg',
            '3c41cd38-7b63-4234-80d0-0961dc3d24ae.jpg',
            '3dce44de-393c-4f9d-a58a-8692197ee977.jpg',
            '5ad90648-8f91-464c-ab1a-80d51fb98d77.jpg',
            '07f8da25-e9a7-4667-b00e-6df1b640f15e.jpg',
            '8aafbdfc-5cb0-4526-b1a4-927a94d63c96.jpg',
            '26ec7dcf-ff44-462a-97e9-41f3bd988de1.jpg',
            '53b48d87-087a-4f7b-8535-129afd014150.jpg',
            '93c1f813-7d61-4d97-8b54-8d66cd48fe62.jpg',
            '378f5f1f-bf18-4a44-9299-99661dfaae18.jpg',
            '401b6f54-0d6f-4d87-b422-915a41fc47f4.jpg',
            '466c0f87-1c83-4f1a-8398-376e64320ecb.jpg',
            '3460d93a-db98-4cc5-b886-7fe0572fc589.jpg',
            '8298ae13-6707-49ba-ba1a-04d239cf07ba.jpg',
            '82759f95-a356-4b6d-8f11-75fe78a552f0.jpg',
            '7996012f-02eb-44d6-9521-a3a6229486f0.jpg',
            'a82c62c2-e812-4d93-884a-59d2238b996e.jpg',
            'acfcf8ec-9950-4570-b46c-6f090f2d3d79.jpg',
            'b5dc2169-64fa-4cc1-8a31-d7e33f384216.jpg',
            'b7e8fc89-7b59-45aa-ab19-3670d960ff33.jpg',
            'b9164c60-8ca0-4372-8811-8023dbedb88d.jpg',
            'bb630693-8238-4f93-86d1-1efe5b7ea442.jpg',
            'bcc564f8-73be-48ac-bd6f-2460d95ee0b0.jpg',
            'c6b94d66-e547-4261-82a0-941a630b9ae6.jpg',
            'd1757710-2913-4859-9f12-e06bcd8d68f5.jpg',
            'df2a6db8-b133-4711-adcd-cadec7c9f7c5.jpg',
            'e0589020-6444-4d46-8f61-ab4703dc1585.jpg',
            'ebeba6a1-98ee-45e0-9d78-d5289eb49166.jpg',
            'f1ca43b9-2d31-4d58-9248-f32f58a15059.jpg',
            'f03cb8c2-bf85-49b0-9f97-a2756d1f5667.jpg',
            'f6a64f76-e0e3-4ca1-88ee-991160a7c7ae.jpg',
            'fdb4dd45-259b-4b99-a445-a268b15fa899.jpg',
            'fdfae647-3207-462a-b4a1-470fe11b2b69.jpg',
            'IMG_8171.JPG',
            'IMG_8208.JPG',
            'IMG_8209.JPG',
            'IMG_8210.JPG',
            'IMG_8211.JPG',
            'IMG_8212.JPG',
            'IMG_8213.JPG',
            'IMG_8213(1).JPG',
            'IMG_8213(2).JPG',
            'IMG_8214.JPG',
            'IMG_8214(1).JPG',
            'IMG_8215.JPG',
            'IMG_8215(1).JPG',
            'IMG_8215(2).JPG',
            'IMG_8216.JPG',
            'IMG_8216(1).JPG',
            'IMG_8216(2).JPG',
            'IMG_8217.JPG',
            'IMG_8218.JPG',
            'IMG_8219.JPG',
            'IMG_8220.JPG',
            'IMG_8221.JPG',
            'IMG_8222.JPG',
            'IMG_8223.JPG',
            'IMG_8224.JPG',
            'IMG_8225.JPG',
            'IMG_8226.JPG',
            'IMG_8227.JPG',
            'IMG_8228.JPG',
            'IMG_8232.JPG',
            'IMG_8278.JPG',
            'IMG_8279.JPG',
            'IMG_8280.JPG',
            'IMG_8281.JPG',
            'IMG_8282.JPG',
            'IMG_8283.JPG',
            'IMG_8284.JPG',
            'IMG_8285.JPG',
            'IMG_8286.JPG',
            'IMG_8287.JPG',
            'IMG_8288.JPG',
            'IMG_8289.JPG',
            'IMG_8290.JPG',
            '2ed59a77-c34e-4cf7-ae03-0228f22cc524.jpg',
            '5767c3be-4c65-4d0f-8be6-2c241b0e9339.jpg',
            'a9518d66-0e41-49dc-9cb9-a38f670ceac8.jpg',
            'c264cd7b-270d-4d70-bb2f-7537a1d3ec82.jpg',
            'ffa5e648-c39d-4742-9a0f-218f078eb840.jpg',
            'IMG_8205.JPG',
            'IMG_8206.JPG',
            'IMG_8207.JPG',
            'IMG_8291.JPG',
            'IMG_8292.JPG',
            'IMG_8293.JPG',
            'IMG_8294.JPG',
            'IMG_8295.JPG',
            'IMG_8296.JPG',
            'IMG_8389.JPG',
            'Photo 2024-03-12 03.17.10 PM.jpg',
        ];
    @endphp
    <section class="production pb-10 pb-md-14 py-3" id="production-template" style="background-color: #fbfafc">
        <div class="container">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($img as $gambar)
                            <li class="splide__slide"><img src="{{ asset('images/detail-tiket/' . $gambar) }}"
                                    class="image-slick" alt="Slide 1">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
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
                                                    <div class="text-dark fst-italic">
                                                        @php
                                                            $boarding_loc = explode(',', $ticket->boarding_location);
                                                        @endphp
                                                        @foreach ($boarding_loc as $key => $b_loc)
                                                            <span>{{ $key + 1 }}. {{ $b_loc }}</span><br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="fw-bold text-dark">{{ $ticket->arrive_time }} -
                                                        {{ $ticket->destination->route_name }}</div>
                                                    <div class="text-dark fst-italic">
                                                        @php
                                                            $drop_loc = explode(',', $ticket->drop_location);
                                                        @endphp
                                                        @foreach ($drop_loc as $key => $b_loc)
                                                            <span>{{ $key + 1 }}. {{ $b_loc }}</span><br>
                                                        @endforeach

                                                    </div>
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
                                            @if ($ticket->type_bus->id != 1)
                                                <div class="col-6 d-flex align-items-center mb-2">
                                                    <i class="fas fa-tablet-alt text-gray-400 me-2"></i> Android tablet
                                                </div>
                                            @endif

                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-bed text-gray-400 me-2"></i> Blanket + Pillow
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-video text-gray-400 me-2"></i> CCTV
                                            </div>
                                            <div class="col-6 d-flex align-items-center mb-2">
                                                <i class="fas fa-briefcase text-gray-400 me-2"></i> Bagasi
                                            </div>
                                            @if ($ticket->type_bus->id == 1)
                                                <div class="col-6 d-flex align-items-center mb-2">
                                                    <i class="fas fa-shoe-prints text-gray-400 me-2"></i> Foot Rest
                                                </div>
                                            @endif
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
    <script src="{{ asset('splide-4.1.3/dist/js/splide.min.js') }}"></script>
    <script>
        $(document).ready(function() {

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
