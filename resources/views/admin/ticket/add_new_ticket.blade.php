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
    <div class="col-lg-12 d-flex ">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">Create New Tiket</h5>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('store.newticket') }}" method="POST">
                    @csrf
                    <div class="form-row d-flex">
                        <div class="col">
                            <label for="route_source" style="color: #ffffff;">Route Source</label>
                            <select class="form-control" id="route_source" name="route_source" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                                <option value="">Select Route Source</option>
                                @foreach($route as $r)
                                <option value="{{ $r->id }}" style="color: #000000;">{{ $r->route_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="route_destination" style="color: #ffffff;">Route Destination</label>
                            <select class="form-control" id="route_destination" name="route_destination" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                                <option value="">Select Route Destination</option>
                                @foreach($route as $r)
                                <option value="{{ $r->id }}" style="color: #000000;">{{ $r->route_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="type_bus_id" style="color: #ffffff;">Type Bus</label>
                            <select class="form-control" id="type_bus_id" name="type_bus_id" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                                <option value="">Select Type Bus</option>
                                @foreach($typebus as $tb)
                                <option value="{{ $tb->id }}" style="color: #000000;">{{ $tb->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row d-flex mt-3">
                        <div class="col position-relative">
                            <label for="departure_time" style="color: #ffffff;">Departure Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #0F4C75; border: 1px solid #ffffff;">
                                        <i class="fas fa-clock" style="color: #ffffff;"></i>
                                    </span>
                                </div>
                                <input type="time" class="form-control" id="departure_time" name="departure_time" required
                                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                            </div>
                        </div>
                        <div class="col position-relative">
                            <label for="arrive_time" style="color: #ffffff;">Arrive Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #0F4C75; border: 1px solid #ffffff;">
                                        <i class="fas fa-clock" style="color: #ffffff;"></i>
                                    </span>
                                </div>
                                <input type="time" class="form-control" id="arrive_time" name="arrive_time" required
                                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                            </div>
                        </div>
                    </div>

                    <div class="form-row d-flex mt-3">
                        <div class="col">
                            <label for="boarding_location" style="color: #ffffff;">Boarding Location</label>
                            <input type="text" class="form-control" id="boarding_location" name="boarding_location" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                        </div>
                        <div class="col">
                            <label for="drop_location" style="color: #ffffff;">Drop Location</label>
                            <input type="text" class="form-control" id="drop_location" name="drop_location" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <label for="price" style="color: #ffffff;">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required
                                style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                        </div>
                    </div>
                    <button type="submit" class="btn w-100 btn-lg mt-3" style="background-color: #F24822; color: #ffffff;">
                        Add Ticket
                    </button>
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>
    </div>


</body>

</html>

@endsection

