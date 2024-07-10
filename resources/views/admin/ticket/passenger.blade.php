@extends('admin.index')

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
                    <div class="card-header bg-card">
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
                    <div class="card-header bg-card">
                        <div class="fw-bold fs-6"> Data Penumpang</div>
                    </div>
                    <div class="card-body p-4">
                        @foreach ($selectedSeat as $seat)
                            <div class="card">
                                <div class="card-header bg-card">
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
    </section>
@endsection
