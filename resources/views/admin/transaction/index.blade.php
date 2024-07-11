@extends('admin.layouts.layouts')

@push('style')
    <!-- Datatable css -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="../../dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../dist/libs/sweetalert2/dist/sweetalert2.min.css">
@endpush
@section('title')
    Data Transaksi
@endsection
@section('main')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Data Transaksi</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h5 class="card-title">
                                Your Transaksi
                            </h5>
                        </div>
                        {{-- <div class="d-flex justify-content-end">

                            <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2" data-bs-toggle="modal"
                                data-bs-target=".add-Transaksi">
                                Add New Employee
                            </button>

                        </div> --}}
                        <!-- Add Transaksi Popup Model -->
                        <div class="table-responsive">
                            <table id="table-1"
                                class="table table-striped table-bordered border text-inputs-searching text-nowrap">
                                <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pemesan</th>
                                        <th>No. Telephone</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Detail</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                    <!-- end row -->
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="../../dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/libs/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../../dist/js/datatable/index.js"></script>

    <script>
        $(document).ready(function() {
            var dataColumns = [{
                    data: 'id'
                },
                {
                    data: 'passenger_name'
                },
                {
                    data: 'passenger_phone'
                },
                {
                    data: 'payment_method'
                },
                {
                    data: 'status_desc'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'id'
                },
            ];
            var columnDef = [{
                    targets: [0],
                    data: 'id',
                    render: function(data, type, full, meta) {
                        return `<p class="text-center"> ${meta.row + 1} </p>`
                    }
                },
                {
                    targets: [6],
                    render: function(data, type, full, meta) {
                        if (data == 'staff') {
                            return `<span class="badge bg-light-primary rounded-3 py-2 text-primary fw-semibold fs-2 d-inline-flex align-items-center gap-1"><i class="ti ti-circle fs-4"></i>Staff</span>`
                        } else if (data == 'finance') {
                            return `<span class="badge bg-light-success rounded-3 py-2 text-success fw-semibold fs-2 d-inline-flex align-items-center gap-1"><i class="ti ti-circle fs-4"></i>Finance</span>`
                        }
                    }
                },
                // {
                //     targets: [5],

                //     data: 'id',
                //     render: function(data, type, full, meta) {
                //         return `<div class="row w-100">
                //            <div class="col-12 d-flex">
                //               <a class="btn btn-warning btn-lg mr-1"
                //                  href="/Transaksi/${data}/edit" 
                //                  data-id=${data}
                //                  data-date="${full.date_of_submission}" data-Transaksi_name="${full.Transaksi_name}"
                //                  data-description="${full.description}" data-support_file="${full.support_file}" data-url="/project/${data}"
                //                  title="Edit"><i class="fas fa-edit"></i></a>
                //               <a class="btn btn-danger btn-lg ml-1"
                //                  href="#deleteData" data-delete-url="/Transaksi/${data}" 
                //                  onclick="return deleteConfirm(this,'delete')"
                //                  title="Delete"><i class="fas fa-trash"></i></a>
                //            </div>
                //      </div>`
                //     }
                // },
            ];
            var arrayParams = {
                idTable: '#table-1',
                urlAjax: "{{ route('bus-reservation.index') }}",
                columns: dataColumns,
                defColumn: columnDef,

            }
            loadAjaxDataTables(arrayParams);
            // table.on('xhr', function() {
            //     jsonTables = table.ajax.json();
            //     // console.log( jsonTables.data[350]["id"] +' row(s) were loaded' );
            // });

        });
    </script>
    {{-- <script src="../../dist/js/datatable/datatable-api.init.js"></script> --}}
@endpush
