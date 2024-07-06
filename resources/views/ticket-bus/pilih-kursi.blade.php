@extends('layouts.index')

@push('styles')
    <style>
        .seat-layout {
            height: 178px;
            width: 374px;
            position: relative;
        }

        .seat {
            position: absolute;
            display: flex;
            align-items: end;
            justify-content: center;
        }

        .booked {
            background: rgb(248, 175, 210);
        }

        .active {
            background: rgb(255, 235, 59);
        }

        .name {
            position: absolute;
            bottom: 0;
            font-size: 12px;
        }

        .legend .poin {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-right: 8px;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid my-4">
        <div class="card card-pick-seat">
            <div class="container-title py-3">
                <div class="title text-center">Klik pilihan kursi yang tersedia kemudian lanjut ke bagian pembayaran.</div>
            </div>
            <div class="p-3">
                <div class="d-flex flex-wrap">
                    <div class="legend me-3 mb-4">
                        <div class="group d-flex align-items-center">
                            <div class="poin" style="background: rgb(213, 218, 226);"></div>
                            <span class="text">Laki - Laki</span>
                        </div>
                    </div>
                    <div class="legend me-3 mb-4">
                        <div class="group d-flex align-items-center">
                            <div class="poin" style="background: rgb(248, 175, 210);"></div>
                            <span class="text">Perempuan</span>
                        </div>
                    </div>
                    <div class="legend me-3 mb-4">
                        <div class="group d-flex align-items-center">
                            <div class="poin" style="background: rgb(255, 213, 150);"></div>
                            <span class="text">Transit</span>
                        </div>
                    </div>
                    <div class="legend me-3 mb-4">
                        <div class="group d-flex align-items-center">
                            <div class="poin" style="background: rgb(255, 255, 255);"></div>
                            <span class="text">Tersedia</span>
                        </div>
                    </div>
                    <div class="legend me-3 mb-4">
                        <div class="group d-flex align-items-center">
                            <div class="poin" style="background: rgb(85, 85, 85);"></div>
                            <span class="text">Kursi Dipilih</span>
                        </div>
                    </div>
                </div>
                <div class="row overflow-auto">
                    <div class="col-12 col-md-6">
                        <div class="container-seat-layout mb-3">
                            <div class="title mb-2">Bawah</div>
                            <div class="seat-layout bg-light border rounded">
                                <div class="seat booked" style="top: 0px; left: 9px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">1</div>
                                </div>
                                <div class="seat booked" style="top: 0px; left: 34px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">4</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 59px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">7</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 84px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">10</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 109px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">13</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 134px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">17</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 159px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">21</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 184px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">25</div>
                                </div>
                                <div class="seat" style="top: 0px; left: 209px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">29</div>
                                </div>
                                <div class="seat" style="top: 25px; left: 109px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">14</div>
                                </div>
                                <div class="seat" style="top: 25px; left: 134px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">18</div>
                                </div>
                                <div class="seat" style="top: 25px; left: 159px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">22</div>
                                </div>
                                <div class="seat" style="top: 25px; left: 184px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">26</div>
                                </div>
                                <div class="seat" style="top: 25px; left: 209px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">30</div>
                                </div>
                                <div class="seat" style="top: 55px; left: 9px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">2</div>
                                </div>
                                <div class="seat booked"
                                    style="top: 55px; left: 34px; width: 20px; height: 25px; background: rgb(213, 218, 226);">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">5</div>
                                </div>
                                <div class="seat active" style="top: 55px; left: 59px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">8</div>
                                </div>
                                <div class="seat" style="top: 55px; left: 84px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">11</div>
                                </div>
                                <div class="seat" style="top: 75px; left: 109px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">15</div>
                                </div>
                                <div class="seat" style="top: 75px; left: 134px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">19</div>
                                </div>
                                <div class="seat" style="top: 75px; left: 159px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">23</div>
                                </div>
                                <div class="seat" style="top: 75px; left: 184px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">27</div>
                                </div>
                                <div class="seat" style="top: 75px; left: 209px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">31</div>
                                </div>
                                <div class="seat" style="top: 90px; left: 9px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">3</div>
                                </div>
                                <div class="seat booked"
                                    style="top: 90px; left: 34px; width: 20px; height: 25px; background: rgb(213, 218, 226);">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">6</div>
                                </div>
                                <div class="seat" style="top: 90px; left: 59px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">9</div>
                                </div>
                                <div class="seat" style="top: 90px; left: 84px; width: 20px; height: 25px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-medium.svg" alt="seat">
                                    <div class="name">12</div>
                                </div>
                                <div class="seat" style="top: 100px; left: 109px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">16</div>
                                </div>
                                <div class="seat" style="top: 100px; left: 134px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">20</div>
                                </div>
                                <div class="seat" style="top: 100px; left: 159px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">24</div>
                                </div>
                                <div class="seat" style="top: 100px; left: 184px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">28</div>
                                </div>
                                <div class="seat" style="top: 100px; left: 209px; width: 20px; height: 20px;">
                                    <img src="https://v2-api.borlindo.com/storage/seats/1_h-regular.svg" alt="seat">
                                    <div class="name">32</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-4">
                        <div class="card-order-summary card">
                            <div class="order-summary m-3">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="title">Naik Dari &amp; Turun Di</div>
                                    <div class="back">Ubah</div>
                                </div>
                                <div class="container-travel-details">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="ic-poin me-2">
                                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTciIHZpZXdCb3g9IjAgMCAxNiAxNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgb3BhY2l0eT0iMC40IiBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHBhdGggZD0iTTE0IDcuMTY1NEMxNCAxMS44MzIxIDggMTUuODMyMSA4IDE1LjgzMjFDOCAxNS44MzIxIDIgMTEuODMyMSAyIDcuMTY1NEMyIDUuNTc0MTEgMi42MzIxNCA0LjA0Nzk4IDMuNzU3MzYgMi45MjI3NkM0Ljg4MjU4IDEuNzk3NTUgNi40MDg3IDEuMTY1NDEgOCAxLjE2NTQxQzkuNTkxMyAxLjE2NTQxIDExLjExNzQgMS43OTc1NSAxMi4yNDI2IDIuOTIyNzZDMTMuMzY3OSA0LjA0Nzk4IDE0IDUuNTc0MTEgMTQgNy4xNjU0WiIgc3Ryb2tlPSIjNEQ1NTU5IiBzdHJva2Utd2lkdGg9IjEuMzkxMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04IDkuMTY3MjhDOS4xMDQ1NyA5LjE2NzI4IDEwIDguMjcxODQgMTAgNy4xNjcyNkMxMCA2LjA2MjY4IDkuMTA0NTcgNS4xNjcyNCA4IDUuMTY3MjRDNi44OTU0MyA1LjE2NzI0IDYgNi4wNjI2OCA2IDcuMTY3MjZDNiA4LjI3MTg0IDYuODk1NDMgOS4xNjcyOCA4IDkuMTY3MjhaIiBzdHJva2U9IiM0RDU1NTkiIHN0cm9rZS13aWR0aD0iMS4zOTEzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMC41KSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                    alt="ic">
                                            </div>
                                            <div class="bus-poin">
                                                <div class="name"><span>Makassar</span> • <span class="ms-2">10 Jul
                                                        2024</span></div>
                                                <div class="desc">Tallasa</div>
                                            </div>
                                        </div>
                                        <div class="time">16:00 WITA</div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="ic-poin me-2">
                                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTciIHZpZXdCb3g9IjAgMCAxNiAxNyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgb3BhY2l0eT0iMC40IiBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHBhdGggZD0iTTE0IDcuMTY1NEMxNCAxMS44MzIxIDggMTUuODMyMSA4IDE1LjgzMjFDOCAxNS44MzIxIDIgMTEuODMyMSAyIDcuMTY1NEMyIDUuNTc0MTEgMi42MzIxNCA0LjA0Nzk4IDMuNzU3MzYgMi45MjI3NkM0Ljg4MjU4IDEuNzk3NTUgNi40MDg3IDEuMTY1NDEgOCAxLjE2NTQxQzkuNTkxMyAxLjE2NTQxIDExLjExNzQgMS43OTc1NSAxMi4yNDI2IDIuOTIyNzZDMTMuMzY3OSA0LjA0Nzk4IDE0IDUuNTc0MTEgMTQgNy4xNjU0WiIgc3Ryb2tlPSIjNEQ1NTU5IiBzdHJva2Utd2lkdGg9IjEuMzkxMyIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik04IDkuMTY3MjhDOS4xMDQ1NyA5LjE2NzI4IDEwIDguMjcxODQgMTAgNy4xNjcyNkMxMCA2LjA2MjY4IDkuMTA0NTcgNS4xNjcyNCA4IDUuMTY3MjRDNi44OTU0MyA1LjE2NzI0IDYgNi4wNjI2OCA2IDcuMTY3MjZDNiA4LjI3MTg0IDYuODk1NDMgOS4xNjcyOCA4IDkuMTY3MjhaIiBzdHJva2U9IiM0RDU1NTkiIHN0cm9rZS13aWR0aD0iMS4zOTEzIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSJjbGlwMCI+CjxyZWN0IHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMC41KSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                    alt="ic">
                                            </div>
                                            <div class="bus-poin">
                                                <div class="name"><span>Palopo</span> • <span
                                                        class="ms-2 text-danger">11 Jul 2024</span></div>
                                                <div class="desc">Terminal</div>
                                            </div>
                                        </div>
                                        <div class="time">04:00 WITA</div>
                                    </div>
                                    <div class="line-trip"></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div class="title">Nomor Kursi</div>
                                    <div class="value"><span class="me-2">8</span></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div class="title">Total Harga</div>
                                    <div class="value">Rp&nbsp;300.000</div>
                                </div>
                                <div class="my-2 mt-3">
                                    <button class="w-100 btn btn-danger">Lanjutkan Pemesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.seat').forEach(seat => {
            seat.addEventListener('click', () => {
                if (!seat.classList.contains('booked')) {
                    seat.classList.toggle('selected');
                }
            });
        });
    </script>
@endpush
