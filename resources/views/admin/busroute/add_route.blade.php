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
    <title>Add Bus Route</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <div class="col-lg-12 d-flex ">
            <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold" style="color: #ffffff;">Add New Bus Route</h5>

        <!-- Form untuk menambahkan rute bus baru -->
        <form action="{{ route('store.routebus') }}" method="POST" class="mb-4">
            @csrf
            <div class="form-group">
                <label for="route_name" style="color: #ffffff;">Route Name</label>
                <input type="text" class="form-control" id="route_name" name="route_name" required
                    style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
            </div>
            <button type="submit" class="btn w-100 btn-lg" style="background-color: #F24822; color: #ffffff;">
                Add Route
            </button>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3" style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div></div>
</body>
</html>

@endsection

