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
    <title>Create Type Bus</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Create Type Bus</h1>

    <!-- Form untuk membuat type bus baru -->
    <form action="{{ route('store.typebus') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Bus Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="seats">Seats</label>
            <input type="number" class="form-control" id="seats" name="seats" required>
        </div>
        <div class="form-group">
            <label for="women_seats">Women Seats</label>
            <input type="number" class="form-control" id="women_seats" name="women_seats" required>
        </div>
        <div class="form-group">
            <label for="men_seats">Men Seats</label>
            <input type="number" class="form-control" id="men_seats" name="men_seats" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection



