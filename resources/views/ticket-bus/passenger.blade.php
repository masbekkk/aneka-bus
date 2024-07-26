@extends('layouts.layouts')

@section('fixed-header')
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-header">
            <div class="container-sm">
                <div class="d-flex justify-content-start align-items-center w-100">
                    <a href="{{ route('choose-seat.ticket-bus', ['id' => $ticket->id]) }}">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="white" />
                        </svg>
                    </a>
                    <div class="text-lg text-white px-3 fw-bolder">Detail Pemesanan</div>
                </div>
            </div>
        </nav>
    </header>
@endsection

@section('content')
    <section class="production pb-10 pb-md-14 py-3" id="production-template" style="background-color: #fbfafc" >
        <div class="container">
            <form action="#pesan-tiket" method="POST">
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
                            {{-- <button type="submit" class="btn btn-lg btn-primary">Sudah Bayar? Cetak Tiket</button> --}}
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </section>
@endsection
@section('fixed-footer')
    <div class="fixed-bottom fixed-bottom-custom d-flex align-items-center">
        <div class="container w-100 w-sm-400 mx-auto">
            <div class="row align-items-center py-3">
                    <div class="col-6">
                        <div class="">
                            <div class="fw-bolder text-lg"> Rp {{ Number::format($totalPrice, locale: 'id') }}
                            </div>
                            <div class="text-md text-dark fst-italic text-selected-date">{{ $totalSeat }} Kursi Dipilih</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('choose-seat.ticket-bus', ['id' => $ticket->id]) }}" class="btn btn-primary fw-bold w-100 text-nowrap"
                            type="button">Lanjutkan Pembayaran</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
