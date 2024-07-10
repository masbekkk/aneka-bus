@extends('layouts.layouts')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-1/assets/css/timeline-1.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        .input-group-append {
            cursor: pointer;
        }

        .card-custom {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .price {
            color: #d39409;
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
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-header">
            <div class="container-sm">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <a href="">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="white" />
                        </svg>
                    </a>
                    <div class="text-white text-center">
                        <div class="fw-bolder">{{ $routeName->first()->route_name }} - {{ $routeName->last()->route_name }}
                        </div>
                        <div class="text-sm text-selected-date"></div>
                    </div>
                    <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#wa_modal">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square"
                            class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" color="white" style="height: 1.5rem;">
                            <path fill="currentColor"
                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
@endsection
@section('content')
    <section class="production pb-10 pb-md-14 py-3" style="background-color: #fbfafc" id="production-template">
        <div class="modal fade in" tabindex="-1" role="dialog" id="wa_modal" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myModalLabel">
                            Pilih Jadwal
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="mt-3" action="{{ route('tiket-bus.index') }}" method="GET"
                            enctype="multipart/form-data">
                            {{-- @csrf --}}
                            <div class="mb-3">
                                <label for="lokasi_dari_id" class="form-label">Lokasi
                                    Dari</label>
                                <select class="form-select" name="source" id="lokasi_dari_id" required>
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
                                <select class="form-select" name="destination" id="lokasi_tujuan_id" required>
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
                                    <input type="text" class="form-control" name="tgl" id="date" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <button id="btnSearch" class="btn btn-primary w-100" type="submit">
                                <i class="fas fa-search"></i> Cari Tiket
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: #fbfafc">
            @foreach ($tickets as $ticket)
                <a href="/tiket-bus/{{ $ticket->id }}" class="text-decoration-none">
                    <div class="card card-custom bg-white mb-3 p-3">
                        <div class="row">
                            <div class="col">
                                <div class="fw-bolder text-dark">{{ $ticket->type_bus->name }}</div>
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row pt-3 pb-3">
                            <div class="col-md-6">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="fw-bolder text-dark">{{ $ticket->departure_time }} -
                                            {{ $ticket->source->route_name }}
                                        </div>
                                        <div class="text-dark fst-italic">{{ $ticket->boarding_location }}</div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="fw-bolder text-dark">{{ $ticket->arrive_time }} -
                                            {{ $ticket->destination->route_name }}
                                        </div>
                                        <div class="text-dark fst-italic">{{ $ticket->drop_location }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="d-flex justify-content-end align-items-center mb-2">
                                    <i class="fas fa-snowflake text-gray-400 me-2"></i>
                                    <i class="fas fa-plug text-gray-400 me-3"></i>
                                    <i class="fas fa-cubes text-gray-400 me-3"></i>
                                    <i class="fas fa-tablet-alt text-gray-400 me-3"></i>
                                    <i class="fas fa-bed text-gray-400 me-3"></i>
                                    <i class="fas fa-video text-gray-400 me-3"></i>
                                    <i class="fas fa-briefcase text-gray-400 me-3"></i>
                                </div>
                                <div class="price fw-bold text-red-800">Rp
                                    {{ Number::format($ticket->price, locale: 'id') }}/Kursi</div>
                                <p class="availability">
                                    {{ count(explode(',', $ticket->type_bus->seats)) - count(explode(',', $ticket->booked_seats)) }}
                                    Kursi Tersisa </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
@section('fixed-footer')
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
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#tanggal_jadwal_keberangkatan').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd',
                startDate: new Date() 
            });
            const $prevDayButton = $('#prevDayButton');
            const $nextDayButton = $('#nextDayButton');
            const $prevDayText = $('#prev-day');
            const $nextDayText = $('#next-day');

            let currentDate = new Date('{{ $departure_date }}');
            // let currentDate = new Date();
            // console.log('set rldt: ', rollbackDate(currentDate))
            const yesterday = new Date();
            yesterday.setDate(currentDate.getDate() - 1);

            function updateButtons() {
                if (currentDate <= yesterday) {
                    $prevDayButton.prop('disabled', true);
                } else {
                    $prevDayButton.prop('disabled', false);
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
                $('.text-selected-date').text(formatDate(currentDate))
                const prevDay = new Date(currentDate.getTime() - 24 * 60 * 60 * 1000);
                const nextDay = new Date(currentDate.getTime() + 24 * 60 * 60 * 1000);
                $prevDayText.text(formatDate(prevDay));
                $nextDayText.text(formatDate(nextDay));
            }

            function updateQueryStringParameter(key, value) {
                var url = window.location.href;
                var re = new RegExp("([?|&])" + key + "=.*?(&|#|$)", "i");

                if (url.match(re)) {
                    url = url.replace(re, '$1' + key + "=" + value + '$2');
                } else {
                    var hash = '';
                    if (url.indexOf('#') !== -1) {
                        hash = url.replace(/.*#/, '#');
                        url = url.replace(/#.*/, '');
                    }
                    var separator = url.indexOf('?') !== -1 ? "&" : "?";
                    url = url + separator + key + "=" + value + hash;
                }
                history.pushState(null, null, url);
                window.location.reload();
            }

            function rollbackDate(d) {
                // var d = new Date(date),
                var month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear();

                if (month.length < 2)
                    month = '0' + month;
                if (day.length < 2)
                    day = '0' + day;

                return [year, month, day].join('-');
            }

            $prevDayButton.on('click', function() {
                currentDate.setDate(currentDate.getDate() - 1);
                console.log('Previous Day:', currentDate.toDateString());
                updateQueryStringParameter('tgl', rollbackDate(currentDate));
                updateButtons();
                updateButtonLabels();
            });

            $nextDayButton.on('click', function() {
                currentDate.setDate(currentDate.getDate() + 1);
                let date = new Date(currentDate)
                updateQueryStringParameter('tgl', rollbackDate(currentDate));
                console.log('Next Day:', currentDate.toDateString());
                updateButtons();
                updateButtonLabels();
            });

            updateButtons();
            updateButtonLabels();
        });
    </script>
@endpush
