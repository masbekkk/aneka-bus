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
<style>
    .table-responsive {
        overflow-x: auto;
    }
    .table th, .table td {
        white-space: nowrap;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Type Bus</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            background-color: #f8f9fa;
        }
        .table-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table thead th {
            background-color: #007bff;
            color: #fff;
        }
        .btn-add {
            margin-bottom: 20px;
        } */
        .table-responsive {
        overflow-x: auto;
    }
    .table th, .table td {
        white-space: nowrap;
    }
    </style>
</head>
<body>
    <div class="col-lg-12 d-flex">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">All Type Buses</h5>

                <div class="card mt-3">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #0F4C75; display: flex; justify-content: space-between; align-items: center;">
                        <h4 class="mb-0" style="color: #0F4C75;">All Type Buses</h4>
                        <a href="{{ route('add.typebus') }}" class="btn" style="background-color: #F24822; color: #ffffff;">Add New Type Bus</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="color: #ffffff;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bus Name</th>
                                        <th style="max-width: 100px; word-wrap: break-word;">Seats</th>
                                        <th style="max-width: 100px; word-wrap: break-word;">Women Seats</th>
                                        <th style="max-width: 100px; word-wrap: break-word;">Men Seats</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($typebus as $bus)
                                        <tr>
                                            <td>{{ $bus->id }}</td>
                                            <td>{{ $bus->name }}</td>
                                            <td>{{ $bus->seats }}</td>
                                            <td>{{ $bus->women_seats }}</td>
                                            <td>{{ $bus->men_seats }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

@endsection

