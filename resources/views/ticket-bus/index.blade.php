@extends('landing-page.layouts')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-1/assets/css/timeline-1.css">
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

        #prevDayButton {
            white-space: normal;
            word-wrap: break-word;
            padding: 10px;
            overflow: hidden;
        }

        #nextDayButton {
            white-space: normal;
            word-wrap: break-word;
            padding: 10px;
            overflow: hidden;
        }

        #prev-day {
            display: block;
        }

        #next-day {
            display: block;
        }

        @media (max-width: 576px) {
            #prev-day {
                font-size: 0.875rem;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            #next-day {
                font-size: 0.875rem;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                /* Smaller font size for extra small devices */
            }
        }
    </style>
@endpush
@section('fixed-header')
<header class="header">
    <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark">
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> --}}
        <div class="container-sm">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-light">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left"
                            class="svg-inline--fa fa-arrow-left " role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" color="white">
                            <path fill="currentColor"
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z">
                            </path>
                        </svg>
                    </button>
                    <span class="navbar-text text-white ms-3">Pilih Kursi</span>
                </div>
            </div>
        </div>
    </nav>
</header>
@endsection
@section('content')
    <section class="production pb-10 pb-md-14 py-3" id="production-template">
        <div class="container">
            @foreach ($tickets as $ticket)
                <a href="/tiket-bus/{{ $ticket->id }}" class="text-decoration-none">
                    <div class="card card-custom bg-white mb-3 p-3">
                        <div class="row">
                            <div class="col">
                                <div class="fw-bold">{{ $ticket->type_bus->name }}</div>
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row pt-3 pb-3">
                            <div class="col-md-6">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="fw-bold">{{ $ticket->departure_time }} -
                                            {{ $ticket->source->route_name }}
                                        </div>
                                        <div class="text-muted">{{ $ticket->boarding_location }}</div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="fw-bold">{{ $ticket->arrive_time }} -
                                            {{ $ticket->destination->route_name }}
                                        </div>
                                        <div class="text-muted">{{ $ticket->drop_location }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="d-flex justify-content-end align-items-center mb-2">
                                    <i class="fas fa-snowflake text-gray-400 me-3"></i>
                                    <i class="fas fa-briefcase text-gray-400 me-3"></i>
                                    <i class="fas fa-plug text-gray-400 me-3"></i>
                                    <i class="fas fa-cheese text-gray-400"></i>
                                </div>
                                <div class="price fw-bold text-red-800">Rp {{ $ticket->price }}/Kursi</div>
                                <p class="availability">Tersisa {{ $ticket->total_seats }} Kursi</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="fixed-bottom fixed-bottom-custom d-flex align-items-center">
            <div class="container w-100 w-sm-400">
                <div class="row align-items-center py-3">
                    <div class="col-6">
                        <button id="prevDayButton" type="button" class="btn btn-primary btn-lg w-100 ">
                            <span class="text-nowrap text-center" id="prev-day"></span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button id="nextDayButton" type="button" class="btn btn-secondary btn-lg w-100 "><span
                                class="text-nowrap text-center" id="next-day"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('fixed-footer')
    <h1>ok</h1>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const prevDayButton = document.getElementById('prevDayButton');
            const nextDayButton = document.getElementById('nextDayButton');
            const prevDayText = document.getElementById('prev-day');
            const nextDayText = document.getElementById('next-day');

            let currentDate = new Date('{{ $ticket->departure_date }}');
            const yesterday = new Date();
            yesterday.setDate(currentDate.getDate() - 1);

            function updateButtons() {
                if (currentDate <= yesterday) {
                    prevDayButton.disabled = true;
                } else {
                    prevDayButton.disabled = false;
                }
            }

            function formatDate(date) {
                return new Intl.DateTimeFormat('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                }).format(date);
            }

            function updateButtonLabels() {
                const prevDay = new Date(currentDate.getTime() - 24 * 60 * 60 * 1000);
                const nextDay = new Date(currentDate.getTime() + 24 * 60 * 60 * 1000);
                prevDayText.textContent = formatDate(prevDay);
                nextDayText.textContent = formatDate(nextDay);
            }

            prevDayButton.addEventListener('click', function() {
                currentDate.setDate(currentDate.getDate() - 1);
                console.log('Previous Day:', currentDate.toDateString());
                updateButtons();
                updateButtonLabels();
            });

            nextDayButton.addEventListener('click', function() {
                currentDate.setDate(currentDate.getDate() + 1);
                console.log('Next Day:', currentDate.toDateString());
                updateButtons();
                updateButtonLabels();
            });

            updateButtons();
            updateButtonLabels();
        });
    </script>
@endpush
