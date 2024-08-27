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
    <div class="col-lg-12 d-flex ">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">Update Waktu Tiket</h5>

                <!-- Form untuk update waktu -->
                <form action="{{ route('tickets.update-times') }}" method="POST" class="mb-4">
                    @csrf
                    @method('PUT')
                    <div class="form-row d-flex">
                        <div class="col">
                            <label for="route_source" style="color: #ffffff;">Asal</label>
                            <select class="form-control" id="route_source" name="route_source" required
                                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                                @foreach($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="route_destination" style="color: #ffffff;">Tujuan</label>
                            <select class="form-control" id="route_destination" name="route_destination" required
                                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                                @foreach($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->route_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row d-flex mt-3">
                        <div class="col position-relative">
                            <label for="departure_time" style="color: #ffffff;">Waktu Berangkat Baru</label>
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
                            <label for="arrive_time" style="color: #ffffff;">Waktu Tiba Baru</label>
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
                    <button type="submit" class="btn w-100 btn-lg mt-4" style="background-color: #F24822; color: #ffffff;">
                        Update Waktu
                    </button>
                </form>

                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </

</body>
</html>

@endsection
