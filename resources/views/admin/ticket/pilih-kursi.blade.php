@extends('admin.layouts.layouts')

@push('style')
    <style>
        .seat:not(.tangga),
        .seat:not(.occupied) {
            position: relative;
            cursor: pointer;
            transition: 0.3s ease background-color;
        }

        .seat svg {
            display: block;
            margin: auto;
        }

        /* .seat.occupied rect {
            fill: lightgray;
        } */

        .seat:not(.tangga) rect {
            fill: #ffffff;
            /* fill: #B99378;; */
        }

        .seat:not(.tangga) path {
            fill: #ffffff;
            /* fill: #B99378;; */
        }

        .seat.occupied.men rect {
            fill: rgb(95, 134, 250);
        }

        .seat.occupied.men path {
            fill: rgb(95, 134, 250);
        }

        .seat.occupied.women rect {
            fill: rgb(248, 175, 210);
        }

        .seat.occupied.women path {
            fill: rgb(248, 175, 210);
        }

        .seat.selected rect {
            /* fill: #ffffff; */
            fill: #B99378;
            ;
        }

        .seat.selected path {
            fill: #644631;
        }

        .seat:hover {
            fill: #ffffff;
        }

        .seat-row .seat:nth-child(3n+1):not(.tangga) {
            margin-right: 4rem !important;
        }

        .seat-row .tangga {
            margin-right: 3rem !important;
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
@section('title')
    Order Offline
@endsection
@section('main')
    <section class="datatable">
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
                                <div class="poin me-2" style="background: rgb(248, 175, 210); width: 20px; height: 20px;">
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
                                <div class="poin me-2" style="background: rgb(255, 255, 255); width: 20px; height: 20px;">
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
                            @include('ticket-bus.kursi-full-premiere', [
                                'men_seats' => $men_seats,
                                'women_seats' => $women_seats,
                            ])
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
                                                class="ms-2 text-danger text-nowrap departure_date fw-bolder fs-4"></span>
                                        </div>
                                        <div class="desc text-dark fst-italic">{{ $ticket->boarding_location }}</div>
                                    </div>
                                </div>
                                <div class="time text-nowrap text-dark mx-2">
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
                                                class="ms-2 text-danger text-nowrap fw-bolder fs-4 arrive_date"></span>
                                        </div>
                                        <div class="desc text-dark fst-italic">{{ $ticket->drop_location }}</div>
                                    </div>
                                </div>
                                <div class="time text-nowrap text-dark mx-2">
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
                    alert("Kamu Belum memilih Kursi!");
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
