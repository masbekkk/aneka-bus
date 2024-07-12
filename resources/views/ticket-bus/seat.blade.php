@extends('layouts.layouts')

@push('styles')
    <link rel="stylesheet" href="{{ asset('dist/css/kursi.css?v=' . bin2hex(random_bytes(20))) }}">
@endpush
@section('fixed-header')
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-header">
            <div class="container-sm">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <a href="{{ route('tiket-bus.show', ['tiket_bu' => $ticket->id]) }}">
                        {!! include_svg('images/back.svg') !!}
                    </a>
                    <div class="text-white text-center">
                        <div class="fw-bolder">Pilih Kursi
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
    <section class="production py-3" id="production-template" style="background-color: #fbfafc">
        <div class="container my-4">
            <div class="row">
                <!-- Left Cont -->
                <div class="col-lg-8">
                    <div class="bg-light p-4 rounded">
                        <div class="d-flex flex-wrap">
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2" style="background: #5c86ff; width: 20px; height: 20px;">
                                    </div>
                                    <span class="text-dark">Terisi Pria</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2"
                                        style="background: rgb(248, 175, 210); width: 20px; height: 20px;">
                                    </div>
                                    <span class="text">Terisi Wanita</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2" style="background: #B99378;; width: 20px; height: 20px;"></div>
                                    <span class="text">Dipilih</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2"
                                        style="background: rgb(255, 255, 255); width: 20px; height: 20px;">
                                    </div>
                                    <span class="text">Tersedia</span>
                                </div>
                            </div>
                            {{-- <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2" style="background: #bdbdbd; width: 20px; height: 20px;">
                                    </div>
                                    <span class="text">Terisi</span>
                                </div>
                            </div> --}}
                        </div>

                        <!-- Seat Container -->
                        <div class="mainSeatCont text-center">
                            <div class="screen mb-4">
                                <small class="fw-bolder text-white">SOPIR</small>
                            </div>
                            <div class="seatCont" id="seatCont">
                                @if ($ticket->type_bus->id == 1)
                                    @include('ticket-bus.kursi-full-premiere', [
                                        'men_seats' => $men_seats,
                                        'women_seats' => $women_seats,
                                    ])
                                @else
                                    @include('ticket-bus.kursi-premiere-sleeper', [
                                        'men_seats' => $men_seats,
                                        'women_seats' => $women_seats,
                                    ])
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Right Cont -->
                <div class="col-lg-4 py-lg-0 py-3">
                    <div class="card-order-summary card">
                        <div class="order-summary m-3">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="title text-dark fs-6">Naik Dari &amp; Turun Di</div>
                                {{-- <div class="back">Ubah</div> --}}
                            </div>
                            <div class="container-travel-details">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="ic-poin me-2">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTciIHZpZXdCb3g9IjAgMCAxNiAxNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgb3BhY2l0eT0iMC40IiBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHBhdGggZD0iTTE0IDcuMTY1NEMxNCAxMS44MzIxIDggMTUuODMyMSA4IDE1LjgzMjFDOCAxNS44MzIxIDIgMTEuODMyMSAyIDcuMTY1NEMyIDUuNTc0MTEgMi42MzIxNCA0LjA0Nzk4IDMuNzU3MzYgMi45MjI3NkM0Ljg4MjU4IDEuNzk3NTUgNi40MDg3IDEuMTY1NDEgOCAxLjE2NTQxQzkuNTkxMyAxLjE2NTQxIDExLjExNzQgMS43OTc1NSAxMi4yNDI2IDIuOTIyNzZDMTMuMzY3OSA0LjA0Nzk4IDE0IDUuNTc0MTEgMTQgNy4xNjU0WiIgc3Ryb2tlPSIjNEQ1NTU5IiBzdHJva2Utd2lkdGg9IjEuMzkxMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04IDkuMTY3MjhDOS4xMDQ1NyA5LjE2NzI4IDEwIDguMjcxODQgMTAgNy4xNjcyNkMxMCA2LjA2MjY4IDkuMTA0NTcgNS4xNjcyNCA4IDUuMTY3MjRDNi44OTU0MyA1LjE2NzI0IDYgNi4wNjI2OCA2IDcuMTY3MjZDNiA4LjI3MTg0IDYuODk1NDMgOS4xNjcyOCA4IDkuMTY3MjhaIiBzdHJva2U9IiM0RDU1NTkiIHN0cm9rZS13aWR0aD0iMS4zOTEzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMC41KSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                alt="ic">
                                        </div>
                                        <div class="bus-poin">
                                            <div class="name fw-bolder text-dark">
                                                <span>{{ $ticket->source->route_name }}</span> • <span
                                                    class="ms-2 text-danger departure_date fw-bolder fs-4"></span>
                                            </div>
                                            <div class="desc text-dark fst-italic">
                                                @php
                                                    $boarding_loc = explode(',', $ticket->boarding_location);
                                                @endphp
                                                @foreach ($boarding_loc as $key => $b_loc)
                                                    <span>{{ $key + 1 }}. {{ $b_loc }}</span><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="time text-nowrap text-dark">
                                        {{ \Carbon\Carbon::createFromFormat('H:i:s', $ticket->departure_time)->format('H:i') }}
                                        WITA</div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="ic-poin me-2">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTciIHZpZXdCb3g9IjAgMCAxNiAxNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgb3BhY2l0eT0iMC40IiBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHBhdGggZD0iTTE0IDcuMTY1NEMxNCAxMS44MzIxIDggMTUuODMyMSA4IDE1LjgzMjFDOCAxNS44MzIxIDIgMTEuODMyMSAyIDcuMTY1NEMyIDUuNTc0MTEgMi42MzIxNCA0LjA0Nzk4IDMuNzU3MzYgMi45MjI3NkM0Ljg4MjU4IDEuNzk3NTUgNi40MDg3IDEuMTY1NDEgOCAxLjE2NTQxQzkuNTkxMyAxLjE2NTQxIDExLjExNzQgMS43OTc1NSAxMi4yNDI2IDIuOTIyNzZDMTMuMzY3OSA0LjA0Nzk4IDE0IDUuNTc0MTEgMTQgNy4xNjU0WiIgc3Ryb2tlPSIjNEQ1NTU5IiBzdHJva2Utd2lkdGg9IjEuMzkxMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04IDkuMTY3MjhDOS4xMDQ1NyA5LjE2NzI4IDEwIDguMjcxODQgMTAgNy4xNjcyNkMxMCA2LjA2MjY4IDkuMTA0NTcgNS4xNjcyNCA4IDUuMTY3MjRDNi44OTU0MyA1LjE2NzI0IDYgNi4wNjI2OCA2IDcuMTY3MjZDNiA4LjI3MTg0IDYuODk1NDMgOS4xNjcyOCA4IDkuMTY3MjhaIiBzdHJva2U9IiM0RDU1NTkiIHN0cm9rZS13aWR0aD0iMS4zOTEzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMC41KSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                alt="ic">
                                        </div>
                                        <div class="bus-poin">
                                            <div class="name fw-bolder text-dark">
                                                <span>{{ $ticket->destination->route_name }}</span> • <span
                                                    class="ms-2 text-danger fw-bolder fs-4 arrive_date"></span>
                                            </div>
                                            <div class="desc text-dark fst-italic">
                                                @php
                                                $drop_loc = explode(',', $ticket->drop_location);
                                            @endphp
                                            @foreach ($drop_loc as $key => $b_loc)
                                                <span>{{$key+1}}. {{$b_loc}}</span><br>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="time text-nowrap text-dark">
                                        {{ \Carbon\Carbon::createFromFormat('H:i:s', $ticket->arrive_time)->format('H:i') }}
                                        WITA</div>
                                </div>
                                <div class="line-trip"></div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between text-dark">
                                <div class="title fw-bolder text-dark">Nomor Kursi</div>
                                <div class="selectedSeatsHolder" id="selectedSeatsHolder">
                                    <span class="noSelected text-dark fw-bold fst-italic">Belum Ada Kursi yang
                                        Dipilih</span>
                                </div>

                                {{-- <div class="value"><span class="me-2">8</span></div> --}}
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="title fw-bolder text-dark">Harga / Kursi</div>
                                <div class="value fw-bold text-dark">
                                    Rp&nbsp;{{ Number::format($ticket->price, locale: 'id') }}</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="title fw-bolder text-dark">Total Harga <span id="numberOfSeat">Rp&nbsp;</span>
                                    Kursi</p>
                                </div>
                                <div class="value fw-bold text-dark" id="totalPrice">Rp&nbsp;</div>
                            </div>
                            <div class="my-2 mt-3">
                                <form action="{{ route('detail-passenger.ticket-bus', ['id' => $ticket->id]) }}"
                                    id="form_submit_seat" method="GET" enctype="multipart/form-data">
                                    <input type="hidden" name="seat[]" id="selected_seat">
                                    <button type="submit" class="w-100 btn btn-primary btn-lg fw-bold proceedBtn">Lanjutkan
                                        Pemesanan</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @include('ticket-bus.script-kursi')
@endpush
