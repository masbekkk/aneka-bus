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
    <title>All Bus Routes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="col-lg-12 d-flex">
        <div class="card w-100 position-relative overflow-hidden" style="background-color: #0F4C75; border-radius: 8px;">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold" style="color: #ffffff;">All Bus Routes</h5>

                @if(session('success'))
                    <div class="alert alert-success mt-3" style="background-color: #0F4C75; color: #ffffff; border: 1px solid #ffffff;">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card mt-3">
                    <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #0F4C75; display: flex; justify-content: space-between; align-items: center;">
                        <h4 class="mb-0" style="color: #0F4C75;">Bus Routes</h4>
                        <a href="{{ route('create.routebus') }}" class="btn" style="background-color: #F24822; color: #ffffff;">Add New Route</a>
                    </div>

                    <div class="card-body"  >
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Route Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($busRoute as $route)
                                    <tr>
                                        <td>{{ $route->id }}</td>
                                        <td>{{ $route->route_name }}</td>
                                        <td>
                                            {{-- <a href="{{ route('edit.routebus', $route->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('delete.routebus', $route->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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

