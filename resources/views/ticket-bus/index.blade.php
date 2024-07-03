@extends('layouts.index')

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
    </style>
@endpush
@section('content')
    <div class="container-fluid my-4">
        @foreach ($tickets as $ticket)
            <a href="/jadwal-keberangkatan/detail/6321" class="text-decoration-none">
                <div class="card card-custom bg-white mb-3 p-3">
                    <div class="row">
                        <div class="col">
                            <div class="fw-bold">{{ $ticket->type_bus }}</div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row pt-3 pb-3">
                        <div class="col-md-6">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="fw-bold">{{ $ticket->departure_time }} - {{ $ticket->source->route_name }}
                                    </div>
                                    <div class="text-muted">{{ $ticket->boarding_location }}</div>
                                </div>
                                <div class="timeline-item">
                                    <div class="fw-bold">{{ $ticket->arrive_time }} - {{ $ticket->destination->route_name }}
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
@endsection
