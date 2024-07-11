@extends('layouts.layouts')

@push('styles')
    {{-- <style>
        .seatCont {}
        .seat:hover,
        .seat:hover::after {
            background-color: #e6e6e6;
        }

        .seat.occupied,
        .seat.occupied::after {
            background-color: lightgray;
        }

        .seat.men,
        .seat.men::after {
            background-color: rgb(95, 134, 250);
        }

        .seat.women,
        .seat.women::after {
            background-color: rgb(248, 175, 210);
        }

        .seat.selected,
        .seat.selected::after {
            background-color: #d39409;
            border-color: rgba(0, 0, 0, 0.336);
        }

        .screen {
            height: 15px;
            width: 65%;
            background-color: #686868;
            border-radius: 0 0 8px 8px;
            max-width: 460px;
            user-select: none;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 0 8px 8px;
        }

        .screen small {
            color: #bdbdbd;
            font-size: 11px;
            letter-spacing: 0.3rem;
        }

        .noSelected {
            text-align: center;
            color: crimson;
            font-size: 12px;
            color: #bdbdbd;
            text-transform: uppercase;
        }

        .selectedSeatsHolder {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            align-items: center;
        }

        .selectedSeats {
            border: 1px solid #d49c2c;
            color: #d39409;
            padding: 0.375rem 1.8rem;
            border-radius: 3px;
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem;
        }

        .selectedSeats:hover {
            background-color: rgba(144, 238, 144, 0.151);
            transition: 0.3s ease background-color;
        }

        .seat-row .seat:nth-child(3n+1) {
            margin-right: 3rem !important;
        }

        .ic-poin img {
            width: 16px;
            height: 17px;
        }

        .container-travel-details .name {
            font-weight: bold;
        }

        .container-travel-details .desc {
            color: #6c757d;
            /* or any other color you prefer */
        }

        .container-travel-details .time {
            font-size: 1.25rem;
        }

        .text-red {
            color: #dc3545;
            /* Bootstrap's red color */
        }

        .line-trip {
            border-top: 2px solid #000;
            /* Adjust color and thickness as needed */
            margin-top: 1rem;
        }
    </style> --}}
    <style>
        .seatCont {}

        .seat {
            position: relative;
            cursor: pointer;
            transition: 0.3s ease background-color;
        }

        .seat svg {
            display: block;
            margin: auto;
        }

        .seat.occupied rect {
            fill: lightgray;
        }

        .seat.men rect {
            fill: rgb(95, 134, 250);
        }

        .seat.women rect {
            fill: rgb(248, 175, 210);
        }

        .seat.selected rect {
            fill: #d39409;
            stroke: rgba(0, 0, 0, 0.336);
        }

        .seat:hover rect {
            fill: #e6e6e6;
        }

        .screen {
            height: 15px;
            width: 65%;
            background-color: #686868;
            border-radius: 0 0 8px 8px;
            max-width: 460px;
            user-select: none;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0 0 8px 8px;
        }

        .screen small {
            color: #bdbdbd;
            font-size: 11px;
            letter-spacing: 0.3rem;
        }

        .noSelected {
            text-align: center;
            color: crimson;
            font-size: 12px;
            color: #bdbdbd;
            text-transform: uppercase;
        }

        .selectedSeatsHolder {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            align-items: center;
        }

        .selectedSeats {
            border: 1px solid #d49c2c;
            color: #d39409;
            padding: 0.375rem 1.8rem;
            border-radius: 3px;
            user-select: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem;
        }

        .selectedSeats:hover {
            background-color: rgba(144, 238, 144, 0.151);
            transition: 0.3s ease background-color;
        }

        .seat-row .seat:nth-child(3n+1) {
            margin-right: 3rem !important;
        }

        .ic-poin img {
            width: 16px;
            height: 17px;
        }

        .container-travel-details .name {
            font-weight: bold;
        }

        .container-travel-details .desc {
            color: #6c757d;
        }

        .container-travel-details .time {
            font-size: 1.25rem;
        }

        .text-red {
            color: #dc3545;
        }

        .line-trip {
            border-top: 2px solid #000;
            margin-top: 1rem;
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
                    <div class="text-lg text-white px-3 fw-bolder">Pilih Kursi</div>
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
                                    <span class="text-dark">Laki - Laki</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2"
                                        style="background: rgb(248, 175, 210); width: 20px; height: 20px;"></div>
                                    <span class="text">Perempuan</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2" style="background: #d39409; width: 20px; height: 20px;"></div>
                                    <span class="text">Dipilih</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2"
                                        style="background: rgb(255, 255, 255); width: 20px; height: 20px;"></div>
                                    <span class="text">Tersedia</span>
                                </div>
                            </div>
                            <div class="legend me-3 mb-4">
                                <div class="group d-flex align-items-center">
                                    <div class="poin me-2" style="background: #bdbdbd; width: 20px; height: 20px;">
                                    </div>
                                    <span class="text">Terisi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Seat Container -->
                        <!-- Seat Container -->
                        <div class="mainSeatCont text-center">
                            <div class="screen mb-4">
                                <small class="fw-bolder text-white">SOPIR</small>
                            </div>
                            <div class="seatCont" id="seatCont">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li>
                                        <div class="d-flex flex-column">
                                            @foreach ($seats->chunk(3) as $seatRow)
                                                <div class="d-flex flex-row seat-row">
                                                    @foreach ($seatRow as $seat)
                                                        @php
                                                            $seat_class = '';
                                                            if (in_array($seat, $booked)) {
                                                                $seat_class = 'occupied';
                                                            } elseif (in_array($seat, $men_seats)) {
                                                                $seat_class = 'men';
                                                            } elseif (in_array($seat, $women_seats)) {
                                                                $seat_class = 'women';
                                                            }
                                                        @endphp
                                                        <div class="seat {{ $seat_class }} mx-1 my-3"
                                                            data-seat-number={{ $seat }}>
                                                            <svg width="60" height="60" viewBox="0 0 609 631"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="542.5" y="2.5" width="536" height="427"
                                                                    rx="23.5" transform="rotate(90 542.5 2.5)"
                                                                    fill="#B99378" stroke="black" stroke-width="5" />
                                                                <rect x="606.5" y="61.5" width="398" height="64"
                                                                    transform="rotate(90 606.5 61.5)" fill="#B99378"
                                                                    stroke="black" stroke-width="5" />
                                                                <path
                                                                    d="M114.5 61.5L114.5 459.5H2.5L2.5 83C2.5 71.1259 12.1259 61.5 24 61.5L114.5 61.5Z"
                                                                    fill="#B99378" stroke="black" stroke-width="5" />
                                                                <path
                                                                    d="M59 320.5C35.9404 320.5 17.5 302.903 17.5 281.5C17.5 260.097 35.9404 242.5 59 242.5C82.0596 242.5 100.5 260.097 100.5 281.5C100.5 302.903 82.0596 320.5 59 320.5Z"
                                                                    fill="#54463B" stroke="black" stroke-width="5" />
                                                                <path
                                                                    d="M59 225.5C35.9404 225.5 17.5 207.903 17.5 186.5C17.5 165.097 35.9404 147.5 59 147.5C82.0596 147.5 100.5 165.097 100.5 186.5C100.5 207.903 82.0596 225.5 59 225.5Z"
                                                                    fill="#54463B" stroke="black" stroke-width="5" />
                                                                <circle cx="58.5" cy="105.5" r="24"
                                                                    transform="rotate(90 58.5 105.5)" fill="#54463B"
                                                                    stroke="black" stroke-width="5" />
                                                                <path d="M461 2L428 421.567L461 537.135" stroke="black"
                                                                    stroke-width="5" />
                                                                <path d="M190 2L223 421.567L190 537.135" stroke="black"
                                                                    stroke-width="5" />
                                                                <path
                                                                    d="M113 323C113 323 257.005 342.503 325.5 341.99C393.996 341.477 545 323 545 323"
                                                                    stroke="black" stroke-width="5" />
                                                                <line x1="450" y1="172.5" x2="204"
                                                                    y2="172.5" stroke="black" stroke-width="5" />
                                                                <line y1="-2.5" x2="236.247" y2="-2.5"
                                                                    transform="matrix(-0.999964 0.00846573 -0.00806743 -0.999967 442.19 232)"
                                                                    stroke="black" stroke-width="5" />
                                                                <line y1="-2.5" x2="223.557" y2="-2.5"
                                                                    transform="matrix(-0.999961 0.00879271 -0.00837902 -0.999965 437.31 295)"
                                                                    stroke="black" stroke-width="5" />
                                                                <line x1="431.023" y1="370.5" x2="218.023"
                                                                    y2="372.491" stroke="black" stroke-width="5" />
                                                                <line x1="428.037" y1="392.5" x2="221.037"
                                                                    y2="395.529" stroke="black" stroke-width="5" />
                                                                <line x1="429.036" y1="415.5" x2="223.036"
                                                                    y2="418.5" stroke="black" stroke-width="5" />
                                                                <path
                                                                    d="M531.193 455.577C539.84 456.507 545.5 464.556 545.5 474.056V560.006C545.5 568.41 541.056 576.019 533.635 579.6C504.488 593.663 429.172 624.927 330.422 628.001C230.261 631.119 154.233 595.41 126.139 579.885C119.412 576.168 115.5 568.968 115.5 561.107V473.801C115.5 464.378 121.103 456.639 129.494 456.334C143.059 455.841 164.399 459.789 187.765 482.301C229.524 522.531 290.915 528.453 330.56 527.499C350.626 527.017 379.005 521.576 406.546 512.326C434.054 503.088 461.077 489.934 478.213 473.822C497.164 456.001 517.533 454.107 531.193 455.577Z"
                                                                    fill="#644631" stroke="black" stroke-width="5" />
                                                            </svg>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
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
                                            <div class="desc text-dark fst-italic">{{ $ticket->boarding_location }}</div>
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
                                            <div class="desc text-dark fst-italic">{{ $ticket->drop_location }}</div>
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
                                    <button type="submit"
                                        class="w-100 btn btn-primary btn-lg fw-bold proceedBtn">Lanjutkan Pemesanan</a>
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
    <script>
        function formatDate(date) {
            return new Intl.DateTimeFormat('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            }).format(date);
        }
        let departure_date = new Date('{{ $ticket->departure_date }}')
        let arrive_date = new Date('{{ $arrive_date }}');
        $('.departure_date').text(formatDate(departure_date))
        $('.arrive_date').text(formatDate(arrive_date))
        const seatPrice = '{{ $ticket->price }}';
        let selectedSeats = [];

        $(document).ready(function() {
            let seatNumber = 1;
            const seats = $(".seatCont .seat");
            seats.each(function() {
                $(this).data("seatNumber", seatNumber++);
            });

            $(".seatCont .seat:not(.occupied)").on("click", function() {
                const seat = $(this);
                if (seat.hasClass("selected")) {
                    seat.removeClass("selected");
                    selectedSeats.splice(selectedSeats.indexOf(seat), 1);
                } else if (!seat.hasClass("occupied")) {
                    seat.addClass("selected");
                    selectedSeats.push(seat);
                }

                const cost = seatPrice * selectedSeats.length;
                $("#totalPrice").text(`Rp ${cost.toLocaleString('id-ID')}`);
                $("#numberOfSeat").text(selectedSeats.length);
                updateSeatHolder();
            });

            function updateSeatHolder() {
                const selectedSeatsHolder = $("#selectedSeatsHolder");
                selectedSeatsHolder.empty();

                if (selectedSeats.length > 0) {
                    selectedSeats.forEach(seat => {
                        const seatHolder = $("<div>").addClass("selectedSeats").text(seat.data(
                            "seatNumber"));
                        selectedSeatsHolder.append(seatHolder);
                    });
                } else {
                    const span = $("<span>").addClass("noSelected").text("No Seat Selected");
                    selectedSeatsHolder.append(span);
                }
            }

            function booked() {
                $('#selected_seat').val(selectedSeats.map(seat => seat.data("seatNumber")));
                // alert(selectedSeats.map(seat => seat.data("seatNumber")).join(", "));
            }

            $("#form_submit_seat").on("submit", function(e) {
                e.preventDefault();
                if (selectedSeats.length == 0) {
                    alert("Oops no seat Selected");
                } else {
                    const selectedSeatNumbers = selectedSeats.map(seat => seat.data("seatNumber"));
                    $('#selected_seat').val(selectedSeatNumbers);
                    // alert($('#selected_seat').val())
                    this.submit();

                    // Create query parameters for the selected seats
                    // const queryParams = $.param({
                    //     seats: selectedSeats
                    // });

                    // Modify the form's action to include the query parameters
                    // this.action += '?' + queryParams;

                    // Submit the form using the GET method
                    // this.submit();
                }
            });

            $("#cancelBtn").on("click", function() {
                selectedSeats.forEach(seat => {
                    seat.removeClass("selected");
                });
                selectedSeats = [];
                $("#numberOfSeat").text(0);
                $("#totalPrice").text(`0`);
                updateSeatHolder();
            });
        });
    </script>
@endpush
