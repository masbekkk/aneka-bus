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
    <div class="col-lg-12 d-flex ">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">Edit Tiket</h5>

    <form action="{{ route('admin.edit.tiket', $tiket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="source" style="color: #ffffff;">Asal</label>
            <input type="text" class="form-control" id="source" name="source" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->source->route_name }}" readonly>
        </div>
        <div class="form-group">
            <label for="destination" style="color: #ffffff;">Tujuan</label>
            <input type="text" class="form-control" id="destination" name="destination" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->destination->route_name }}" readonly>
  </div>
        <div class="form-group">
            <label for="type_bus" style="color: #ffffff;">Jenis Bus</label>
            <input type="text" class="form-control" id="type_bus" name="type_bus" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->type_bus->name }}" readonly>
           </div>
        <div class="form-group">
            <label for="departure_date" style="color: #ffffff;">Tanggal Berangkat</label>
            <input type="text" class="form-control" id="departure_date" name="departure_date" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->departure_date }}" readonly>
     </div>
        <div class="form-group">
            <label for="departure_time" style="color: #ffffff;">Waktu Berangkat</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: #0F4C75; border: 1px solid #ffffff;">
                        <i class="fas fa-clock" style="color: #ffffff;"></i>
                    </span>
                </div>
                <input type="time" class="form-control" id="departure_time" name="departure_time" required
                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->departure_time }}">
            </div>
  </div>
        <div class="form-group">
            <label for="arrive_time" style="color: #ffffff;">Waktu Tiba</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: #0F4C75; border: 1px solid #ffffff;">
                        <i class="fas fa-clock" style="color: #ffffff;"></i>
                    </span>
                </div>
                <input type="time" class="form-control" id="arrive_time" name="arrive_time" required
                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->arrive_time }}">
            </div>

              </div>
        <div class="form-group">
            <label for="boarding_location" style="color: #ffffff;">Lokasi Naik</label>
            <input type="text" class="form-control" id="boarding_location" name="boarding_location" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->boarding_location }}" readonly>
  </div>
        <div class="form-group">

            <label for="drop_location" style="color: #ffffff;">Lokasi Turun</label>
            <input type="text" class="form-control" id="drop_location" name="drop_location" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->drop_location }}" readonly>
   </div>
        <div class="form-group">
            <label for="price" style="color: #ffffff;">Harga</label>
            <input type="text" class="form-control" id="price" name="price" required
                style="background-color: #042338; color: #ffffff; border: 1px solid #ffffff;" value="{{ $tiket->price }}" readonly>
        </div>
        <button type="submit" class="btn w-100 btn-lg mt-4" style="background-color: #F24822; color: #ffffff;">
            Simpan
        </button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
