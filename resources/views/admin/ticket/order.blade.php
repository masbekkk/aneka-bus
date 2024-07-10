@extends('admin.index')

@push('style')
    <!-- Datatable css -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="../../dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush
@section('title')
    Order Offline
@endsection
@section('main')
    <div class="container">
        <!--  Row 1 -->
        <div class="card border-primary">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel"
                        aria-labelledby="pesan-tiket-tab">
                        <div class="row">
                            <div class="col-lg-12 d-flex align-items-stretch">
                                <div class="card w-100 position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                                        <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi
                                            Keberangkatan serta Destinasi Perjalananmu disini</p>
                                        <form class="mt-3" action="#" method="GET" enctype="multipart/form-data">
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
                                                <select class="form-select" name="destination" id="lokasi_tujuan_id"
                                                    required>
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
                                                    <input type="text" class="form-control" name="tgl"
                                                        id="date" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-light d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="lokasi_tujuan_id" class="form-label">Pilih Bus yang
                                                    Tersedia</label>
                                                <select class="form-select" name="pilih_bus" id="pilih_bus" required>

                                                </select>
                                            </div>
                                            <button id="btnSearch" class="btn btn-primary w-100" type="submit">
                                                <i class="fas fa-search"></i> Cari Tiket
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kirim-barang" role="tabpanel" aria-labelledby="kirim-barang-tab">
                        <!-- Content for Kirim Barang -->
                        <img src="{{ asset('landingpage/dist/images/svgs/seat.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="sewa-bus" role="tabpanel" aria-labelledby="sewa-bus-tab">
                        <!-- Content for Sewa Bus -->
                        {{-- <img src="{{ asset('landingpage/dist/images/svgs/seat1.svg')}}"
                    alt="" class="img-fluid"> --}}
                        <svg width="631" height="609" viewBox="0 0 631 609" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.5" y="66.5" width="536" height="427" rx="23.5" fill="#D9D9D9"
                                stroke="black" stroke-width="5" />
                            <rect x="61.5" y="2.5" width="398" height="64" fill="#D9D9D9" stroke="black"
                                stroke-width="5" />
                            <path d="M61.5 494.5H459.5V606.5H83C71.1259 606.5 61.5 596.874 61.5 585V494.5Z" fill="#D9D9D9"
                                stroke="black" stroke-width="5" />
                            <path
                                d="M320.5 550C320.5 573.06 302.903 591.5 281.5 591.5C260.097 591.5 242.5 573.06 242.5 550C242.5 526.94 260.097 508.5 281.5 508.5C302.903 508.5 320.5 526.94 320.5 550Z"
                                fill="#868686" stroke="black" stroke-width="5" />
                            <path
                                d="M225.5 550C225.5 573.06 207.903 591.5 186.5 591.5C165.097 591.5 147.5 573.06 147.5 550C147.5 526.94 165.097 508.5 186.5 508.5C207.903 508.5 225.5 526.94 225.5 550Z"
                                fill="#868686" stroke="black" stroke-width="5" />
                            <circle cx="105.5" cy="550.5" r="24" fill="#868686" stroke="black" stroke-width="5" />
                            <path d="M2 148L421.567 181L537.135 148" stroke="black" stroke-width="5" />
                            <path d="M2 419L421.567 386L537.135 419" stroke="black" stroke-width="5" />
                            <path d="M323 496C323 496 342.503 351.995 341.99 283.5C341.477 215.004 323 64 323 64"
                                stroke="black" stroke-width="5" />
                            <line x1="172.5" y1="159" x2="172.5" y2="405" stroke="black"
                                stroke-width="5" />
                            <line y1="-2.5" x2="236.247" y2="-2.5"
                                transform="matrix(0.00846573 0.999964 -0.999967 0.00806743 232 166.81)" stroke="black"
                                stroke-width="5" />
                            <line y1="-2.5" x2="223.557" y2="-2.5"
                                transform="matrix(0.00879271 0.999961 -0.999965 0.00837902 295 171.69)" stroke="black"
                                stroke-width="5" />
                            <line x1="370.5" y1="177.977" x2="372.491" y2="390.977" stroke="black"
                                stroke-width="5" />
                            <line x1="392.5" y1="180.963" x2="395.529" y2="387.963" stroke="black"
                                stroke-width="5" />
                            <line x1="415.5" y1="179.964" x2="418.5" y2="385.964" stroke="black"
                                stroke-width="5" />
                            <path
                                d="M455.577 77.8071C456.507 69.1597 464.556 63.5 474.056 63.5H560.006C568.41 63.5 576.019 67.9443 579.6 75.3651C593.663 104.512 624.927 179.828 628.001 278.578C631.119 378.739 595.41 454.767 579.885 482.861C576.167 489.588 568.968 493.5 561.107 493.5H473.801C464.378 493.5 456.639 487.897 456.334 479.506C455.841 465.941 459.789 444.601 482.3 421.235C522.531 379.476 528.453 318.085 527.499 278.44C527.017 258.374 521.576 229.995 512.326 202.454C503.088 174.946 489.934 147.923 473.821 130.787C456.001 111.836 454.107 91.4672 455.577 77.8071Z"
                                fill="#D9D9D9" stroke="black" stroke-width="5" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="../../dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../dist/js/datatable/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#tanggal_jadwal_keberangkatan').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd'
            });

            function formatDate(date) {
                return new Intl.DateTimeFormat('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                }).format(date);
            }

            function fetchBusOptions() {
                var lokasiDari = $('#lokasi_dari_id').val();
                var lokasiTujuan = $('#lokasi_tujuan_id').val();
                var tanggalKeberangkatan = $('#date').val();

                if (lokasiDari && lokasiTujuan && tanggalKeberangkatan) {
                    $.ajax({
                        url: '/admin-tiket', // The URL endpoint on the backend Laravel to fetch the bus options
                        method: 'GET',
                        data: {
                            source: lokasiDari,
                            destination: lokasiTujuan,
                            tgl: tanggalKeberangkatan
                        },
                        success: function(response) {
                            console.log(response.tiket);
                            $('#pilih_bus').empty(); // Clear the existing options
                            if (response.tiket.length > 0) {
                                response.tiket.forEach(function(bus) {
                                    let departure_date = new Date(bus.departure_date)
                                    let available_seats = (bus.type_bus.seats.split(',').length) - (bus.booked_seats.split(',').length)
                                    console.log(available_seats)
                                    $('#pilih_bus').append(`<option value="${bus.id}"> 
                                        ${bus.type_bus.name} -  
                                        ${formatDate(departure_date)} - ${bus.departure_time} - Sisa Kursi: ${available_seats}
                                        </option>`);
                                });
                            } else {
                                $('#pilih_bus').append('<option value="">No buses available</option>');
                            }
                        },
                        error: function(error) {
                            console.error('Error fetching bus options:', error);
                        }
                    });
                }
            }

            $('#lokasi_dari_id, #lokasi_tujuan_id, #date').change(fetchBusOptions);

            $('#tanggal_jadwal_keberangkatan').on('dp.change',
                fetchBusOptions); // If you're using a date picker plugin like datetimepicker
        });
    </script>
@endpush
