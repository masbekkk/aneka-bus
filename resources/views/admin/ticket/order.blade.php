@extends('admin.layouts.layouts')

@push('style')
    <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush
@section('title')
    Order Offline
@endsection
@section('main')
    <section class="datatable">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                        <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi
                            Keberangkatan serta Destinasi Perjalananmu disini</p>
                        {{-- <form class="mt-3 pilih-tiket-form" action="#" method="GET" enctype="multipart/form-data"> --}}
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
                            <div class="mb-3">
                                <label for="lokasi_tujuan_id" class="form-label">Pilih Bus yang
                                    Tersedia</label>
                                <select class="form-select" name="pilih_bus" id="pilih_bus" required>

                                </select>
                            </div>
                            <button id="btnSearch" class="btn btn-primary w-100" type="submit">
                                <i class="fas fa-search"></i> Pilih Kursi
                            </button>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        url: '/admin-order', // The URL endpoint on the backend Laravel to fetch the bus options
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
                                    let available_seats = (bus.type_bus.seats.split(',')
                                        .length) - (bus?.booked_seats?.split(',').length ? bus?.booked_seats?.split(',').length : 0)
                                    console.log(available_seats)
                                    $('#pilih_bus').append(`<option value="${bus.id}"> 
                                        ${bus.type_bus.name} -  
                                        ${formatDate(departure_date)} - ${bus.departure_time} - Sisa Kursi: ${isNaN(available_seats) ? '0' : available_seats}
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

            $('#tanggal_jadwal_keberangkatan').on('dp.change', fetchBusOptions);
            
            $('#btnSearch').click( function(e) {
                e.preventDefault();
                let pilih_bus = $('#pilih_bus').val();
                console.log(pilih_bus)
                if(!pilih_bus || pilih_bus == "")
                {
                    alert("Kamu belum memilih Bis");

                } else {
                    window.location.href = "/admin-order/" + pilih_bus
                    // $('.pilih-tiket-form').attr('/admin-order/' + pilih_bus)

                    // $('.pilih-tiket-form').submit();
                } 
            })
        });
    </script>
@endpush
