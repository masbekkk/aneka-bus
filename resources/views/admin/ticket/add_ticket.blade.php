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
    <title>Create Ticket</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="col-lg-12 d-flex ">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">Create Tiket</h5>

        <!-- Form untuk create ticket -->
        <form action="{{ route('ticket.store_ticket') }}" method="POST">
            @csrf
            <div class="form-row d-flex">
                <div class="col">
                    <label for="route_source_name" style="color: #ffffff;">Route Source Name</label>
                    <input type="text" class="form-control" id="route_source_name" name="route_source_name" required
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                </div>
                <div class="col">
                    <label for="route_destination_name" style="color: #ffffff;">Route Destination Name</label>
                    <input type="text" class="form-control" id="route_destination_name" name="route_destination_name" required
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                </div>
            </div>
            <div class="form-row d-flex mt-3">
                <div class="col">
                    <label for="type_bus_name" style="color: #ffffff;">Type Bus Name</label>
                    <input type="text" class="form-control" id="type_bus_name" name="type_bus_name" required
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                </div>
                <div class="col">
                    <label for="seats" style="color: #ffffff;">Seats (Enter number of seats)</label>
                    <input type="text" class="form-control" id="seats" name="seats" required
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                </div>
            </div>
            <div class="form-row d-flex mt-3">
                <div class="col">
                    <label for="women_seats" style="color: #ffffff;">Number of Women Seats</label>
                    <input type="number" class="form-control" id="women_seats" name="women_seats"
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                </div>
                <div class="col">
                    <label for="men_seats" style="color: #ffffff;">Number of Men Seats</label>
                    <input type="number" class="form-control" id="men_seats" name="men_seats"
                        style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
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
            <button type="submit" class="btn w-100 btn-lg mt-4" style="background-color: #F24822; color: #ffffff;">
                Create Ticket
            </button>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body>
</html>

@endsection



