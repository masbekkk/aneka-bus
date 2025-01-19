@extends('admin.layouts.layouts')

@push('style')
    {{-- <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css"> --}}
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
                <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold" style="color: #ffffff;">Pesan Tiket</h5>
                        <p class="card-subtitle mb-4" style="color: #ffffff;">Pilih Tanggal dan Lokasi Keberangkatan serta Destinasi Perjalananmu disini</p>
                        <form class="mt-3" action="{{ route('tiket-bus.index') }}" method="GET" enctype="multipart/form-data">
                            {{-- @csrf --}}
                            <div class="mb-3">
                                <label for="lokasi_dari_id" class="form-label" style="color: #ffffff;">Lokasi Dari</label>
                                <div style="position: relative;">
                                    <select class="form-select" name="source" id="lokasi_dari_id" required style="color: #ffffff; background-color: #0F4C75; border: 1px solid #ffffff; appearance: none; padding-right: 40px;">
                                        @foreach ($routes as $route)
                                            <option value="{{ $route->id }}" style="color: #000000;">{{ $route->route_name }}</option>
                                        @endforeach
                                    </select>
                                    <span style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                                        <i class="fa fa-chevron-down" style="color: #ffffff;"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="lokasi_tujuan_id" class="form-label" style="color: #ffffff;">Lokasi Tujuan</label>
                                <div style="position: relative;">
                                    <select class="form-select" name="destination" id="lokasi_tujuan_id" required style="color: #ffffff; background-color: #0F4C75; border: 1px solid #ffffff; appearance: none; padding-right: 40px;">
                                        @foreach ($routes as $route)
                                            <option value="{{ $route->id }}" style="color: #000000;">{{ $route->route_name }}</option>
                                        @endforeach
                                    </select>
                                    <span style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                                        <i class="fa fa-chevron-down" style="color: #ffffff;"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_jadwal_keberangkatan" class="form-label" style="color: #ffffff;">Tgl. Keberangkatan</label>
                                <div class="input-group date" id="tanggal_jadwal_keberangkatan">
                                    <input type="text" class="form-control" name="tgl" id="date" style="color: #ffffff; background-color: #0F4C75; border: 1px solid #ffffff; border-radius: 6px;" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block" style="background-color: #0F4C75; border: 1px solid #ffffff; margin-left: 8px;">
                                            <i class="fa fa-calendar" style="color: #0F4C75;"></i>
                                        </span>


                                    </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pilih_bus" class="form-label" style="color: #ffffff;">Pilih Bus yang Tersedia</label>
                                <div style="position: relative;">
                                    <select class="form-select" name="pilih_bus" id="pilih_bus" required style="color: #ffffff; background-color: #0F4C75; border: 1px solid #ffffff; appearance: none; padding-right: 40px;">
                                        <!-- Option bus akan ditambahkan di sini -->
                                    </select>
                                    <span style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                                        <i class="fa fa-chevron-down" style="color: #ffffff;"></i>
                                    </span>
                                </div>
                            </div>

                            <button id="btnSearch" class="btn w-100 btn-lg" type="submit" style="background-color: #F24822; color: #FFFFFF;">
                                <i class="fas fa-search"></i> Cari Tiket
                            </button>
                        </form>
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
