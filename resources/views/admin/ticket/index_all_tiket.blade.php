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

<div class="container mt-5">
    <h1 class="mb-4">Daftar Tiket</h1>
    @if($tiket->isEmpty())
        <p class="text-center">Tidak ada tiket yang tersedia.</p>
    @else
        <table class="table table-bordered">
            <thead>
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
                            <a href="{{ route('admin.tiket.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $tiket->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
