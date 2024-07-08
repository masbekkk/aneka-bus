@extends('landing-page.layouts')

@push('styles')
    <style>
        .seatCont {}

        .seat {
            height: 75px;
            width: 40px;
            border: 1px solid #bdbdbd;
            border-radius: 2px 2px 4px 4px;
            margin: 5px;
            margin-bottom: 0.8rem;
            position: relative;
            cursor: pointer;
            background-color: #fff;
            transition: 0.3s ease background-color;
        }

        .seat::after {
            content: "";
            height: 30px;
            width: 30px;
            border: 1px solid #bdbdbd;
            position: absolute;
            left: 50%;
            top: 29%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 2px 2px;
            transition: 0.3s ease background-color;
            content: attr(data-seat-number);
        }

        .seat:hover,
        .seat:hover::after {
            background-color: #e6e6e6;
        }

        .seat.occupied,
        .seat.occupied::after {
            background-color: lightgray;
        }

        .seat.selected,
        .seat.selected::after {
            background-color: rgb(168, 245, 168);
            border-color: rgba(0, 190, 0, 0.336);
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
            border: 1px solid lightgreen;
            color: lightgreen;
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
            margin-right: 3rem;
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
    </style>
@endpush

@section('content')
    <section class="production py-3" id="production-template">
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
                                    <span class="text">Laki - Laki</span>
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
                                    <div class="poin me-2"
                                        style="background: rgb(168, 245, 168);width: 20px; height: 20px;"></div>
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
                        <div class="mainSeatCont text-center">
                            <div class="screen mb-4">
                                <small class="fw-bold">SOPIR</small>
                            </div>
                            <div class="seatCont" id="seatCont">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li>
                                        <div class="d-flex flex-column">
                                            @foreach ($seats->chunk(3) as $seatRow)
                                                <div class="d-flex flex-row seat-row">
                                                    @foreach ($seatRow as $seat)
                                                        <div class="seat {{ in_array($seat, $booked) ? 'occupied' : '' }}"
                                                            data-seat-number={{ $seat }}></div>
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
                                <div class="title">Naik Dari &amp; Turun Di</div>
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
                                            <div class="name"><span>{{ $ticket->source->route_name }}</span> • <span class="ms-2 text-danger">11 Jul
                                                    2024</span></div>
                                            <div class="desc">{{ $ticket->boarding_location }}</div>
                                        </div>
                                    </div>
                                    <div class="time text-nowrap">{{ \Carbon\Carbon::createFromFormat('H:i:s', $ticket->departure_time)->format('H:i') }} WITA</div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start">
                                        <div class="ic-poin me-2">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTciIHZpZXdCb3g9IjAgMCAxNiAxNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgb3BhY2l0eT0iMC40IiBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHBhdGggZD0iTTE0IDcuMTY1NEMxNCAxMS44MzIxIDggMTUuODMyMSA4IDE1LjgzMjFDOCAxNS44MzIxIDIgMTEuODMyMSAyIDcuMTY1NEMyIDUuNTc0MTEgMi42MzIxNCA0LjA0Nzk4IDMuNzU3MzYgMi45MjI3NkM0Ljg4MjU4IDEuNzk3NTUgNi40MDg3IDEuMTY1NDEgOCAxLjE2NTQxQzkuNTkxMyAxLjE2NTQxIDExLjExNzQgMS43OTc1NSAxMi4yNDI2IDIuOTIyNzZDMTMuMzY3OSA0LjA0Nzk4IDE0IDUuNTc0MTEgMTQgNy4xNjU0WiIgc3Ryb2tlPSIjNEQ1NTU5IiBzdHJva2Utd2lkdGg9IjEuMzkxMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04IDkuMTY3MjhDOS4xMDQ1NyA5LjE2NzI4IDEwIDguMjcxODQgMTAgNy4xNjcyNkMxMCA2LjA2MjY4IDkuMTA0NTcgNS4xNjcyNCA4IDUuMTY3MjRDNi44OTU0MyA1LjE2NzI0IDYgNi4wNjI2OCA2IDcuMTY3MjZDNiA4LjI3MTg0IDYuODk1NDMgOS4xNjcyOCA4IDkuMTY3MjhaIiBzdHJva2U9IiM0RDU1NTkiIHN0cm9rZS13aWR0aD0iMS4zOTEzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMC41KSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                alt="ic">
                                        </div>
                                        <div class="bus-poin">
                                            <div class="name"><span>{{ $ticket->destination->route_name }}</span> • <span class="ms-2 text-danger">11 Jul
                                                    2024</span></div>
                                            <div class="desc">{{ $ticket->drop_location }}</div>
                                        </div>
                                    </div>
                                    <div class="time text-nowrap">{{ \Carbon\Carbon::createFromFormat('H:i:s', $ticket->arrive_time)->format('H:i') }} WITA</div>
                                </div>
                                <div class="line-trip"></div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="title">Nomor Kursi</div>
                                <div class="selectedSeatsHolder" id="selectedSeatsHolder">
                                    <span class="noSelected">Belum Ada Kursi yang Dipilih</span>
                                </div>
                                
                                {{-- <div class="value"><span class="me-2">8</span></div> --}}
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="title">Harga / Kursi</div>
                                <div class="value">Rp&nbsp;{{ $ticket->price }}</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="title">Total Harga <span id="numberOfSeat">Rp&nbsp;</span> Kursi</p></div>
                                <div class="value" id="totalPrice">Rp&nbsp;300.000</div>
                            </div>
                            <div class="my-2 mt-3">
                                <button class="w-100 btn btn-danger">Lanjutkan Pemesanan</button>
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
        // document.addEventListener("DOMContentLoaded", function() {
        //     const seats = document.querySelectorAll('.seat');
        //     seats.forEach((seat, index) => {
        //         seat.textContent = index + 1;
        //     });
        // });

        const movieName = document.getElementById("movieName");
        const moviePrice = document.getElementById("moviePrice");
        const totalPrice = document.getElementById("totalPrice");
        const selectedSeatsHolder = document.getElementById("selectedSeatsHolder");
        const numberOfSeat = document.getElementById("numberOfSeat");
        const proceedBtn = document.getElementById("proceedBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const selectMovie = document.querySelector("#selectMovie");
        let selectedSeats = [];

        // const moviesList = [{
        //         movieName: "{{ $ticket->type_bus->name }}",
        //         price: {{ $ticket->price }}
        //     },
        //     // {
        //     //     movieName: "Spiderman",
        //     //     price: 5
        //     // },
        //     // {
        //     //     movieName: "Batman",
        //     //     price: 4
        //     // },
        // ];

        // moviesList.forEach((mv, i) => {
        //     const option = document.createElement("option");
        //     option.textContent = `${mv.movieName} $${mv.price}`;
        //     option.value = i;
        //     selectMovie.append(option)
        // });

        // selectMovie.addEventListener("change", function() {
        //     const idx = selectMovie.value;
        //     updateDetails(idx);
        // });

        // function updateDetails(idx) {
        //     moviePrice.textContent = `$ ${moviesList[idx].price}`;
        //     movieName.textContent = moviesList[idx].movieName
        // }

        const seatCont = document.querySelector(".seatCont");
        let seatNumber = 1;
        const seatsAll = seatCont.querySelectorAll(".seat");
        seatsAll.forEach(seat => {
            seat.dataset.seatNumber = seatNumber++;
        });

        const seatPrice = '{{ $ticket->price }}';
        const seats = seatCont.querySelectorAll(".seat:not(.occupied)");
        seats.forEach(seat => {
            seat.addEventListener("click", () => {
                if (seat.classList.value.includes("selected")) {
                    seat.classList.remove("selected");
                    selectedSeats.splice(selectedSeats.indexOf(seat), 1);
                } else if (!seat.classList.value.includes("occupied")) {
                    seat.classList.add("selected");
                    selectedSeats.push(seat);
                }
                const cost = (seatPrice) * selectedSeats.length;
                totalPrice.textContent = `Rp ${cost}`;
                numberOfSeat.textContent = selectedSeats.length;
                updateSeatHolder();
            });
        })

        function updateSeatHolder() {
            selectedSeatsHolder.innerHTML = "";
            selectedSeats.forEach(seat => {
                const seatHolder = document.createElement("div");
                seatHolder.classList.add("selectedSeats");
                seatHolder.innerHTML = seat.dataset.seatNumber;
                selectedSeatsHolder.appendChild(seatHolder);
            })

            if (!selectedSeats.length > 0) {
                const span = document.createElement("span");
                span.classList.add("noSelected");
                span.innerHTML = "No Seat Selected";
                selectedSeatsHolder.appendChild(span);
            }
        }

        function booked() {
            for (let seat of selectedSeats) {
                seat.classList.remove("selected");
                seat.classList.add("occupied");
            }
            selectedSeats = [];
            numberOfSeat.textContent = 0;
            totalPrice.textContent = `0`;
        }

        proceedBtn.addEventListener("click", () => {
            if (selectedSeats.length == 0)
                alert("Oops no seat Selected");
            else {
                booked();
                alert("Yayy! Your Seats have been booked");
            }
        })

        cancelBtn.addEventListener("click", () => {
            selectedSeats.forEach(seat => {
                seat.classList.remove("selected");
                numberOfSeat.textContent = 0;
                totalPrice.textContent = `0`;
                selectedSeats = [];
                updateSeatHolder();
            })
        })
    </script>
@endpush
