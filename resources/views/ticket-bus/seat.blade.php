@extends('landing-page.layouts')

@push('styles')
    <style>
        .seatCont {}

        .seat {
            height: 25px;
            width: 30px;
            border: 1px solid #bdbdbd;
            border-radius: 2px 2px 4px 4px;
            margin: 10px;
            margin-bottom: 0.8rem;
            position: relative;
            cursor: pointer;
            background-color: #fff;
            transition: 0.3s ease background-color;
        }

        .seat::after {
            content: "";
            height: 23px;
            width: 20px;
            border: 1px solid #bdbdbd;
            position: absolute;
            left: 50%;
            top: 29%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-radius: 2px 2px;
            transition: 0.3s ease background-color;
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
    </style>
@endpush

@section('content')
    <section class="production py-3" id="production-template">
        <div class="container my-4">
            <div class="row">
                <!-- Left Cont -->
                <div class="col-lg-8">
                    <div class="bg-light p-4 rounded">
                        <div class="legendContainer mb-4">
                            <ul class="list-unstyled d-flex justify-content-around">
                                <li>
                                    <div class="seat"></div>
                                    <small>Available</small>
                                </li>
                                <li>
                                    <div class="seat selected"></div>
                                    <small>Selected</small>
                                </li>
                                <li>
                                    <div class="seat occupied"></div>
                                    <small>Occupied</small>
                                </li>
                            </ul>
                        </div>
                        <!-- Seat Container -->
                        <div class="mainSeatCont text-center">
                            <div class="screen mb-4">
                                <small>SCREEN</small>
                            </div>
                            <div class="seatCont" id="seatCont">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="d-flex flex-column">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="seat"></div>
                                        <div class="seat occupied"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                    </div>
                                    {{-- </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="seat"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Cont -->
                <div class="col-lg-4">
                    <div class="confirmCont bg-light p-4 rounded">
                        <div class="rightTopCont mb-4">
                            <!-- Movie Info -->
                            <div class="movieInfo mb-4">
                                <label class="selectMovie mb-3">
                                    <p class="mb-1">Select Your Movie</p>
                                    <select id="selectMovie" class="form-select"></select>
                                </label>
                                <div class="movieName mb-3">
                                    <p class="mb-1">MOVIE NAME</p>
                                    <h1 id="movieName">flash</h1>
                                </div>
                                <div class="moviePrice mb-3">
                                    <p class="mb-1">MOVIE PRICE</p>
                                    <h1 id="moviePrice">$ 7</h1>
                                </div>
                                <div class="dateCont">
                                    <p class="mb-1">Date</p>
                                    <h2 class="date">22 June, 2023</h2>
                                </div>
                            </div>
                        </div>
                        <div class="rightBottomCont">
                            <div class="selectedSeatCont mb-4">
                                <p class="mb-2">SELECTED SEATS</p>
                                <div class="selectedSeatsHolder" id="selectedSeatsHolder">
                                    <span class="noSelected">No Seat Selected</span>
                                </div>
                            </div>
                            <!-- Seat number and price -->
                            <div class="numberOfSeatsCont mb-4 d-flex justify-content-between">
                                <div class="numberOfSeatEl">
                                    <p class="mb-0"><span id="numberOfSeat">0</span> Seats(s)</p>
                                </div>
                                <div class="priceCont">
                                    <p class="mb-0" id="totalPrice">$ 0</p>
                                </div>
                            </div>
                            <!-- Button Cont -->
                            <div class="buttonCont d-flex flex-column">
                                <div class="cancelBtn mb-3">
                                    <button id="cancelBtn" class="btn btn-danger w-100">Cancel</button>
                                </div>
                                <div class="proceedBtnEl">
                                    <button id="proceedBtn" class="btn btn-success w-100">Continue</button>
                                </div>
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
        const movieName = document.getElementById("movieName");
        const moviePrice = document.getElementById("moviePrice");
        const totalPrice = document.getElementById("totalPrice");
        const selectedSeatsHolder = document.getElementById("selectedSeatsHolder");
        const numberOfSeat = document.getElementById("numberOfSeat");
        const proceedBtn = document.getElementById("proceedBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const selectMovie = document.querySelector("#selectMovie");
        let selectedSeats = [];

        const moviesList = [{
                movieName: "Flash",
                price: 7
            },
            {
                movieName: "Spiderman",
                price: 5
            },
            {
                movieName: "Batman",
                price: 4
            },
        ];

        moviesList.forEach((mv, i) => {
            const option = document.createElement("option");
            option.textContent = `${mv.movieName} $${mv.price}`;
            option.value = i;
            selectMovie.append(option)
        });

        selectMovie.addEventListener("change", function() {
            const idx = selectMovie.value;
            updateDetails(idx);
        });

        function updateDetails(idx) {
            moviePrice.textContent = `$ ${moviesList[idx].price}`;
            movieName.textContent = moviesList[idx].movieName
        }

        const seatCont = document.querySelector(".seatCont");
        let seatNumber = 1;
        const seatsAll = seatCont.querySelectorAll(".seat");
        seatsAll.forEach(seat => {
            seat.dataset.seatNumber = seatNumber++;
        });

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
                const cost = (moviePrice.textContent.split(" ")[1]) * selectedSeats.length;
                totalPrice.textContent = `$ ${cost}`;
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
            totalPrice.textContent = `$ 0`;
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
                totalPrice.textContent = `$ 0`;
                selectedSeats = [];
                updateSeatHolder();
            })
        })
    </script>
@endpush
