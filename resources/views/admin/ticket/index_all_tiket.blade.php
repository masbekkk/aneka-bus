@extends('admin.layouts.layouts')

@push('style')
    <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <style>
            .page-item.active .page-link {
                background-color: #F24822;
                border-color: #F24822;
                color: #ffffff;
            }
            .page-link {
                color: #F24822;
            }
            .page-link:hover {
                color: #ffffff;
                background-color: #F24822;
                border-color: #F24822;
            }
        </style>
        @endpush

@section('title')
    Order Offline
@endsection

@section('main')

<div class="col-lg-12 d-flex">
    <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold" style="color: #ffffff;">Semua Tiket Tersedia</h5>

            @if($tiket->isEmpty())
                <p class="text-center text-white">Tidak ada tiket yang tersedia.</p>
            @else
                <div class="card mt-3">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #0F4C75;">
                        <h5 class="mb-0" style="color: #0F4C75;">Daftar Tiket</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="color: #ffffff;">
                                <thead style="background-color: #0F4C75; color: #ffffff;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Jenis Bus</th>
                                        <th>Tanggal Berangkat</th>
                                        <th>Waktu Berangkat</th>
                                        <th>Waktu Tiba</th>
                                        <th>Lokasi Naik</th>
                                        <th>Lokasi Turun</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tiket as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->source->route_name }}</td>
                                            <td>{{ $item->destination->route_name }}</td>
                                            <td>{{ $item->type_bus->name }}</td>
                                            <td>{{ $item->departure_date }}</td>
                                            <td>{{ $item->departure_time }}</td>
                                            <td>{{ $item->arrive_time }}</td>
                                            <td>{{ $item->boarding_location }}</td>
                                            <td>{{ $item->drop_location }}</td>
                                            <td>{{ number_format($item->price, 0, ',', '.') }}</td>
                                            <td>
                                                <a href="{{ route('admin.tiket.edit', $item->id) }}" class="btn" style="background-color: #F24822; color: #ffffff;">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-3">
                            {{ $tiket->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
