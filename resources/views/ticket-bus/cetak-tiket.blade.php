<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Title -->
    <title>Aneka Transpport</title>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo.png') }}">
    {{--
    <link rel="shortcut icon" type="image/png" href="{{ asset('landingpage/dist/images/logos/favicon.ico') }}"> --}}
    <!--  Aos -->
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('landingpage/dist/css/style.min.css') }}"> --}}
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet"
        href="{{ asset('dist/css/style.min.css?v=' . bin2hex(random_bytes(20))) }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="row">
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
                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $ticket->departure_time)->format('H:i')
                                    }}
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
                        <!-- <div class="my-2 mt-3">
                            <form action="{{ route('detail-passenger.ticket-bus', ['id' => $ticket->id]) }}"
                                id="form_submit_seat" method="GET" enctype="multipart/form-data">
                                <input type="hidden" name="seat[]" id="selected_seat">
                                <button type="submit" class="w-100 btn btn-primary btn-lg fw-bold proceedBtn">Lanjutkan
                                    Pemesanan</a>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>