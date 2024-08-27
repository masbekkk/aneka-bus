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
    <div class="col-lg-12 d-flex">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">Create Type Bus</h5>

                <!-- Form untuk membuat type bus baru -->
                <form action="{{ route('store.typebus') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" style="color: #ffffff;">Bus Name</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                    </div>
                    <div class="form-group">
                        <label for="seats" style="color: #ffffff;">Seats</label>
                        <input type="number" class="form-control" id="seats" name="seats" required
                            style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                    </div>
                    <div class="form-group">
                        <label for="women_seats" style="color: #ffffff;">Women Seats</label>
                        <input type="number" class="form-control" id="women_seats" name="women_seats" required
                            style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                    </div>
                    <div class="form-group">
                        <label for="men_seats" style="color: #ffffff;">Men Seats</label>
                        <input type="number" class="form-control" id="men_seats" name="men_seats" required
                            style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                    </div>
                    <button type="submit" class="btn w-100 btn-lg" style="background-color: #F24822; color: #ffffff;">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

@endsection



