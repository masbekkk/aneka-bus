@extends('landing-page.layouts')

@section('fixed-header')
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark">
            <div class="container-sm">
                <div class="d-flex justify-content-start align-items-center w-100">
                    <button type="button" class="btn btn-outline-warning btn_back">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="white" />
                        </svg>
                    </button>
                    <div class="text-lg text-white px-3 fw-bolder">Detail Pemesanan</div>
                </div>
            </div>
        </nav>
    </header>
@endsection

@section('content')
    <section class="production pb-10 pb-md-14 py-3" id="production-template">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-header text-bg-primary">
                            <div class="fw-bold fs-6"> Data Pemesan</div>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="lokasi_dari_id" class="form-label">Nama Pemesan Sesuai KTP</label>
                                <input class="form-control" name="nama_pemesan" type="text">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi_dari_id" class="form-label">Email Pemesan</label>
                                <input class="form-control" name="email_pemesan" type="email">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi_dari_id" class="form-label">Nomor WhatsApp Pemesan</label>
                                <input class="form-control" name="wa_pemesan" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-header text-bg-primary">
                            <div class="fw-bold fs-6"> Data Penumpang</div>
                        </div>
                        <div class="card-body p-4">
                            @foreach ($selectedSeat as $seat)
                                <div class="card">
                                    <div class="card-header text-bg-primary">
                                        <div class="fst-italic"> Penumpang Nomor Kursi {{ $seat }}</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="lokasi_dari_id" class="form-label">Nama Penumpang Sesuai KTP</label>
                                            <input class="form-control" name="nama_penumpang" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="lokasi_dari_id" class="form-label text-nowrap">Jenis
                                                        Kelamin</label>
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        @if (in_array($seat, explode(',', $ticket->type_bus->women_seats)))
                                                            <option value="female" selected disabled>Perempuan</option>
                                                        @elseif (in_array($seat, explode(',', $ticket->type_bus->men_seats)))
                                                            <option value="male" selected disabled>Laki-laki</option>
                                                        @else
                                                            <option value="">Pilih...</option>
                                                            <option value="male">Laki-laki</option>
                                                            <option value="female">Perempuan</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="mb-3">
                                                    <label for="lokasi_dari_id" class="form-label text-nowrap">Nomor
                                                        Telepon</label>
                                                    <input class="form-control" name="wa_pemesan" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

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
                            <div class="text-md text-selected-date">{{ $totalSeat }} Kursi Dipilih</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('choose-seat.ticket-bus', ['id' => $ticket->id]) }}" class="btn btn-danger w-100 text-nowrap"
                            type="button">Lanjutkan Pembayaran</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
