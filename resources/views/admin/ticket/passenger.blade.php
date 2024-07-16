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
        <form action="{{ route('bus-reservation.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-header bg-card">
                            <div class="fw-bold fs-6"> Data Pemesan</div>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="nama_pemesan" class="form-label">Nama Pemesan Sesuai KTP</label>
                                <input class="form-control" id="nama_pemesan" name="nama_pemesan" type="text" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="email_pemesan" class="form-label">Email Pemesan</label>
                                <input class="form-control" id="email_pemesan" name="email_pemesan" type="email" required>
                            </div> --}}
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Nomor WhatsApp Pemesan (Tiket akan dikirim via WhatsApp)</label>
                                <input class="form-control" id="wa_pemesan" name="wa_pemesan" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Lokasi Naik</label>
                                <select class="form-control" name="departure_location" required>
                                    @php
                                                $boarding_loc = explode(',', $ticket->boarding_location);
                                            @endphp
                                            @foreach ($boarding_loc as $key => $b_loc)
                                                <option value="{{$b_loc}}">{{$b_loc}}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Lokasi Turun</label>
                                <select class="form-control" name="drop_location" required>
                                    @php
                                                $drop_loc = explode(',', $ticket->drop_location);
                                            @endphp
                                            @foreach ($drop_loc as $key => $b_loc)
                                                <option value="{{$b_loc}}">{{$b_loc}}</option>
                                            @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-header bg-card">
                            <div class="fw-bold fs-6"> Data Penumpang</div>
                        </div>
                        <div class="card-body p-4">
                            @foreach ($selectedSeat as $key => $seat)
                                <div class="card mb-3">
                                    <div class="card-header bg-card">
                                        <div class="fst-italic"> Penumpang Nomor Kursi {{ $seat }}</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nama_penumpang_{{ $seat }}" class="form-label">Nama
                                                Penumpang Sesuai KTP</label>
                                            <input class="form-control" id="nama_penumpang_{{ $seat }}"
                                                name="passengers[{{ $seat }}][nama_penumpang]" type="text"
                                                required>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="gender_{{ $seat }}"
                                                        class="form-label text-nowrap">Jenis Kelamin</label>
                                                    <select class="form-select" id="gender_{{ $seat }}"
                                                        name="passengers[{{ $seat }}][gender]" required>

                                                        <option value="">Pilih...</option>
                                                        <option value="male">Laki-laki</option>
                                                        <option value="female">Perempuan</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="mb-3">
                                                    <label for="telepon_{{ $seat }}"
                                                        class="form-label text-nowrap">Nomor Telepon</label>
                                                    <input class="form-control" id="telepon_{{ $seat }}"
                                                        name="passengers[{{ $seat }}][telepon]" type="text"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <input type="hidden" name="ticket_bus_id" value="{{ $ticket->id }}" required>
                        <input type="hidden" name="total_price" value="{{ $totalPrice }}" required>
                        <button type="submit" class="btn btn-lg btn-primary">Sudah Bayar? Cetak Tiket</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
