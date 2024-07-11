@extends('admin.layouts.layouts')

@push('style')
    <!-- Datatable css -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush
@section('title')
    Data Transaksi
@endsection
@section('main')
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Detail Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <div class="form-group ">
                        <label class="fw-bolder">Email Pemesan</label>
                        <div class="email_modal"></div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="fw-bolder">Gender Pemesan</label>
                        <p class="gender_modal"></p>
                    </div> --}}
                    <div class="form-group">
                        <label class="fw-bolder">Perjalanan</label>
                        <p class="perjalanan"></p>
                    </div>
                    <div class="form-group">
                        <label class="fw-bolder">Type Bus</label>
                        <p class="type_bus"></p>
                    </div>
                    <div class="table-responsive">
                        <table class="table-2 table-striped table-bordered border text-inputs-searching text-nowrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>No.HP</th>
                                    <th>No. Kursi</th>
                                </tr>
                                <!-- end row -->
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-header text-white shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8 text-white">Data Transaksi</h4>
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
                                Transaksi
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
                                class="table-1 table table-striped table-bordered border text-inputs-searching text-nowrap">
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
    <script src="{{ asset('dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.js"></script> --}}
    <script src="{{ asset('dist/js/datatable/index.js') }}"></script>

    <script>
        $(document).ready(function() {
            // $.ajax({
            //     url: "{{ route('bus-reservation.index') }}",
            //     type: 'GET',
            //     success: function(data) {
            //         // Handle the success response
            //         console.log(data);
            //         // You can update the DOM or perform other actions with the returned data
            //     },
            //     error: function(xhr, status, error) {
            //         // Handle the error response
            //         console.error(error);
            //     }
            // });

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
                        return `<a href="#detailProject" data-bs-toggle="modal" data-bs-target="#detailModal" class="btn btn-primary" 
                        data-passenger='${JSON.stringify(full.passenger)}' data-email="${full.passenger_email}" data-gender=${full.passenger_gender}
                        data-tiket='${JSON.stringify(full.ticket_bus)}'
                        >
                        <i class="fas fa-eye"></i> Detail dan Penumpang</a>`
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
                idTable: '.table-1',
                urlAjax: "{{ route('bus-reservation.index') }}",
                columns: dataColumns,
                defColumn: columnDef,

            }
            loadAjaxDataTables(arrayParams);

            // table.on('xhr', function() {
            //     jsonTables = table.ajax.json();
            //     // console.log( jsonTables.data[350]["id"] +' row(s) were loaded' );
            // });
            var arrayPassenger = {};
            $('#detailModal').on('show.bs.modal', function(e) {
                const button = $(e.relatedTarget);
                $('.email_modal').html(button.data('email'))
                $('.gender_modal').html(button.data('gender'))
                let tiket = button.data('tiket');

                $('.perjalanan').html(
                    `${tiket.source.route_name} - ${tiket.destination.route_name} - ${tiket.departure_time}`
                )
                $('.type_bus').html(tiket.type_bus.name)
                let passengers = button.data('passenger')
                console.log(passengers)
                var dataColumns = [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'gender'
                    },
                    {
                        data: 'no_hp'
                    },
                    {
                        data: 'no_kursi'
                    },
                ];
                var mappedData = passengers.map(function(passenger) {
                    return {
                        id: passenger.id,
                        name: passenger.name,
                        gender: passenger.gender,
                        no_hp: passenger.no_hp,
                        no_kursi: passenger.no_kursi
                    };
                });
                // Check if DataTable instance already exists and destroy it if it does
                if ($.fn.DataTable.isDataTable('.table-2')) {
                    $('.table-2').DataTable().clear().destroy();
                }

                // Initialize DataTable
                $('.table-2').DataTable({
                    data: mappedData,
                    columns: dataColumns,
                    // responsive: params.responsive,
                    dom: 'lfrtip',
                    processing: true,


                    /// ---- handle filter each column function  -----
                    initComplete: function() {
                            var api = this.api();
                            // For each column
                            api
                                .columns()
                                .eq(0)
                                .each(function(colIdx) {
                                    // Set the header cell to contain the input element
                                    var cell = $('.filters th').eq(
                                        $(api.column(colIdx).header()).index()
                                    );
                                    var title = $(cell).text();
                                    $(cell).html(
                                        '<input type="text" class="text-center text-wrap" style="text-transform: uppercase;" placeholder="' +
                                        title + '" />'
                                    );

                                    // On every keypress in this input
                                    $(
                                            'input',
                                            $('.filters th').eq($(api.column(colIdx)
                                            .header()).index())
                                        )
                                        .off('keyup change')
                                        .on('change', function(e) {
                                            // Get the search value
                                            $(this).attr('title', $(this).val());
                                            var regexr =
                                                '({search})'; //$(this).parents('th').find('select').val();

                                            var cursorPosition = this.selectionStart;
                                            // Search the column for that value
                                            api
                                                .column(colIdx)
                                                .search(
                                                    this.value != '' ?
                                                    regexr.replace('{search}', '(((' +
                                                        this.value +
                                                        ')))') :
                                                    '',
                                                    this.value != '',
                                                    this.value == ''
                                                )
                                                .draw();
                                        })
                                        .on('keyup', function(e) {
                                            e.stopPropagation();

                                            $(this).trigger('change');
                                            $(this)
                                                .focus()[0]
                                            // .setSelectionRange(cursorPosition, cursorPosition);
                                        });
                                });
                        // }
                    },
                });
            })


        });
    </script>
    {{-- <script src="../../dist/js/datatable/datatable-api.init.js"></script> --}}
@endpush
