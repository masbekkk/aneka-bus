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
    <title>Add New Ticket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Add New Ticket</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('store.newticket') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col">
                <label for="route_source">Route Source</label>
                <select class="form-control" id="route_source" name="route_source" required>
                    <option value="">Select Route Source</option>
                    @foreach($route as $r)
                        <option value="{{ $r->id }}">{{ $r->route_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="route_destination">Route Destination</label>
                <select class="form-control" id="route_destination" name="route_destination" required>
                    <option value="">Select Route Destination</option>
                    @foreach($route as $r)
                        <option value="{{ $r->id }}">{{ $r->route_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="type_bus_id">Type Bus</label>
                <select class="form-control" id="type_bus_id" name="type_bus_id" required>
                    <option value="">Select Type Bus</option>
                    @foreach($typebus as $tb)
                        <option value="{{ $tb->id }}">{{ $tb->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col">
                <label for="departure_time">Departure Time</label>
                <input type="time" class="form-control" id="departure_time" name="departure_time" required>
            </div>
            <div class="col">
                <label for="arrive_time">Arrive Time</label>
                <input type="time" class="form-control" id="arrive_time" name="arrive_time" required>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col">
                <label for="boarding_location">Boarding Location</label>
                <input type="text" class="form-control" id="boarding_location" name="boarding_location" required>
            </div>
            <div class="col">
                <label for="drop_location">Drop Location</label>
                <input type="text" class="form-control" id="drop_location" name="drop_location" required>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Ticket</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

