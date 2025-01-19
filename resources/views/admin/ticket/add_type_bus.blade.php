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
        <div class="form-group">
            <label for="type_bus">Bus Type</label>
            <select class="form-control" id="type_bus" name="type_bus" required>
                <option value="1">Sleeper</option>
                <option value="0">Premier</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
