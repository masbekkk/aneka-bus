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
    <title>Edit Tiket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Tiket</h1>
    <form action="{{ route('admin.edit.tiket', $tiket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="source">Asal</label>
            <input type="text" class="form-control" id="source" name="source" value="{{ $tiket->source->route_name }}" readonly>
        </div>
        <div class="form-group">
            <label for="destination">Tujuan</label>
            <input type="text" class="form-control" id="destination" name="destination" value="{{ $tiket->destination->route_name }}" readonly>
        </div>
        <div class="form-group">
            <label for="type_bus">Jenis Bus</label>
            <input type="text" class="form-control" id="type_bus" name="type_bus" value="{{ $tiket->type_bus->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="departure_date">Tanggal Berangkat</label>
            <input type="date" class="form-control" id="departure_date" name="departure_date" value="{{ $tiket->departure_date }}" readonly/>
        </div>
        <div class="form-group">
            <label for="departure_time">Waktu Berangkat</label>
            <input type="time" class="form-control" id="departure_time" name="departure_time" value="{{ $tiket->departure_time }}">
        </div>
        <div class="form-group">
            <label for="arrive_time">Waktu Tiba</label>
            <input type="time" class="form-control" id="arrive_time" name="arrive_time" value="{{ $tiket->arrive_time }}">
        </div>
        <div class="form-group">
            <label for="boarding_location">Lokasi Naik</label>
            <input type="text" class="form-control" id="boarding_location" name="boarding_location" value="{{ $tiket->boarding_location }}" readonly>
        </div>
        <div class="form-group">
            <label for="drop_location">Lokasi Turun</label>
            <input type="text" class="form-control" id="drop_location" name="drop_location" value="{{ $tiket->drop_location }}" readonly>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $tiket->price }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
