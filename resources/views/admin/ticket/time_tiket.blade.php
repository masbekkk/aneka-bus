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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Ticket Times</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Update Waktu Tiket</h1>

    <!-- Form untuk update waktu -->
    <form action="{{ route('tickets.update-times') }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col">
                <label for="route_source">Asal</label>
                <select class="form-control" id="route_source" name="route_source" required>
                    @foreach($routes as $route)
                        <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="route_destination">Tujuan</label>
                <select class="form-control" id="route_destination" name="route_destination" required>
                    @foreach($routes as $route)
                        <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="departure_time">Waktu Berangkat Baru</label>
                <input type="time" class="form-control" id="departure_time" name="departure_time" required>
            </div>
            <div class="col">
                <label for="arrive_time">Waktu Tiba Baru</label>
                <input type="time" class="form-control" id="arrive_time" name="arrive_time" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Waktu</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
