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
    <section class="datatable">
        <form action="{{ route('bus-reservation.store') }}" method="POST" id="submit_form_tiket">
            @csrf
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-header bg-card">
                            <div class="fw-bold fs-6"> Data Pemesan</div>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="nama_pemesan" class="form-label">Nama Pemesan Sesuai KTP</label>
                                <input class="form-control" id="nama_pemesan" name="nama_pemesan" type="text" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="email_pemesan" class="form-label">Email Pemesan</label>
                                <input class="form-control" id="email_pemesan" name="email_pemesan" type="email" required>
                            </div> --}}
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Nomor WhatsApp Pemesan (Tiket akan dikirim via
                                    WhatsApp)</label>
                                <input class="form-control" id="wa_pemesan" name="wa_pemesan" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Lokasi Naik</label>
                                <select class="form-control" name="departure_location" required>
                                    @php
                                        $boarding_loc = explode(',', $ticket->boarding_location);
                                    @endphp
                                    @foreach ($boarding_loc as $key => $b_loc)
                                        <option value="{{ $b_loc }}">{{ $b_loc }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="wa_pemesan" class="form-label">Lokasi Turun</label>
                                <select class="form-control" name="drop_location" required>
                                    @php
                                        $drop_loc = explode(',', $ticket->drop_location);
                                    @endphp
                                    @foreach ($drop_loc as $key => $b_loc)
                                        <option value="{{ $b_loc }}">{{ $b_loc }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100 position-relative ">
                        <div class="card-header bg-card">
                            <div class="fw-bold fs-6"> Data Penumpang</div>
                        </div>
                        <div class="card-body p-4">
                            @foreach ($selectedSeat as $key => $seat)
                            {{-- <input type="hidden" name="passengers[{{ $seat }}][no_kursi]" value=""> --}}
                                <div class="card mb-3">
                                    <div class="card-header bg-card">
                                        <div class="fst-italic"> Penumpang Nomor Kursi {{ $seat }}</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="nama_penumpang_{{ $seat }}" class="form-label">Nama
                                                Penumpang Sesuai KTP</label>
                                            <input class="form-control" id="nama_penumpang_{{ $seat }}"
                                                name="passengers[{{ $seat }}][nama_penumpang]" type="text"
                                                required>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="gender_{{ $seat }}"
                                                        class="form-label text-nowrap">Jenis Kelamin</label>
                                                    <select class="form-select" id="gender_{{ $seat }}"
                                                        name="passengers[{{ $seat }}][gender]" required>

                                                        <option value="">Pilih...</option>
                                                        <option value="male">Laki-laki</option>
                                                        <option value="female">Perempuan</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="mb-3">
                                                    <label for="telepon_{{ $seat }}"
                                                        class="form-label text-nowrap">Nomor Telepon</label>
                                                    <input class="form-control" id="telepon_{{ $seat }}"
                                                        name="passengers[{{ $seat }}][telepon]" type="text"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <input type="hidden" name="ticket_bus_id" value="{{ $ticket->id }}" required>
                            <input type="hidden" name="total_price" value="{{ $totalPrice }}" required>
                            <input type="hidden" name="type_action" id="btn_tipe_aksi" value="save" required>
                            <input type="hidden" name="reservation_id" id="reservation_id" value="" required>
                            <div class="text-center">
                                <button type="submit" id="save_tiket" class="btn btn-lg btn-success w-100 mb-3 p-2">Simpan Tiket</button>
                            </div>
                           <div class="text-center">
                                <button type="submit" id="cetak_tiket" class="btn btn-lg btn-primary w-100">Cetak Tiket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        $('#cetak_tiket').click(function(e) {
            e.preventDefault();
            $('#btn_tipe_aksi').val('print');
            let forms = $('#submit_form_tiket');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: forms.attr('action'),
                method: 'POST',
                async: true,
                dataType: 'json',
                data: forms.serialize(),
                beforeSend: function(xhr) {
                    Swal.fire({
                        title: 'Sedang menyimpan data...',
                        html: 'Mohon ditunggu!',
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                },
                success: function(data) {
                    Swal.close()
                    Swal.fire({
                        toast: true,
                        position: 'top-right',
                        icon: 'success',
                        title: 'Yayy!',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    })
                    // if (data.redirect != null) {
                    //     window.location.href = data.redirect
                    // }

                    if (data.redirect_new_tab != null) {
                        window.open(data.redirect_new_tab, '_blank')
                        // window.location.href = params.redirect_new_tab
                    }
                    // forms[0].reset()
                    

                },
                error: function(xhr) {
                    Swal.close()
                    var message;
                    var validationErrors = xhr.responseJSON.errors
                    console.log('xhr: ', xhr.responseJSON.errors);
                    // console.log('status: ', status);
                    // console.log('error: ', error);
                    console.log(typeof validationErrors === 'object')
                    if (typeof validationErrors === 'object') {
                        for (var fieldName in validationErrors) {
                            if (validationErrors.hasOwnProperty(fieldName)) {
                                var errorMessages = validationErrors[fieldName];

                                // Handle each error message for the current field
                                console.log('Validation Errors for ' + fieldName + ':', errorMessages);
                                message = errorMessages
                                validationErrors = errorMessages
                            }
                        }

                        console.log('message from for loop: ', message)
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There is something wrong while saving data. Try again! ' +
                            validationErrors

                    })
                }
            });
        });
        $('#save_tiket').click(function(e) {
            e.preventDefault();
            $('#btn_tipe_aksi').val('save');
            let forms = $('#submit_form_tiket');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: forms.attr('action'),
                method: 'POST',
                async: true,
                dataType: 'json',
                data: forms.serialize(),
                beforeSend: function(xhr) {
                    Swal.fire({
                        title: 'Sedang menyimpan data...',
                        html: 'Mohon ditunggu!',
                        timerProgressBar: true,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                },
                success: function(data) {
                    Swal.close()
                    Swal.fire({
                        toast: true,
                        position: 'top-right',
                        icon: 'success',
                        title: 'Yayy!',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    });
                    $('#reservation_id').val(data.reservation_id);
                    $('#save_tiket').text('Update Tiket');
                    // if (data.redirect != null) {
                    //     window.location.href = data.redirect
                    // }

                    if (data.redirect_new_tab != null) {
                        window.open(data.redirect_new_tab, '_blank')
                        // window.location.href = params.redirect_new_tab
                    }
                    // forms[0].reset()
                    

                },
                error: function(xhr) {
                    Swal.close()
                    var message;
                    var validationErrors = xhr.responseJSON.errors
                    console.log('xhr: ', xhr.responseJSON.errors);
                    // console.log('status: ', status);
                    // console.log('error: ', error);
                    console.log(typeof validationErrors === 'object')
                    if (typeof validationErrors === 'object') {
                        for (var fieldName in validationErrors) {
                            if (validationErrors.hasOwnProperty(fieldName)) {
                                var errorMessages = validationErrors[fieldName];

                                // Handle each error message for the current field
                                console.log('Validation Errors for ' + fieldName + ':', errorMessages);
                                message = errorMessages
                                validationErrors = errorMessages
                            }
                        }

                        console.log('message from for loop: ', message)
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There is something wrong while saving data. Try again! ' +
                            validationErrors

                    })
                }
            });
        });
        // $('#cetak_tiket').click(function(e) {
        //     e.preventDefault();
        //     // alert($(this).data('modal'))
        //     $('#btn_tipe_aksi').val('print');
        //     let form = $('#submit_form_tiket');
        //     var arr_params = {
        //         url: form.attr('action'),
        //         method: 'POST',
        //         input: form.serialize(),
        //         forms: form[0],
        //         redirect_new_tab:
        //         // reload: false,
        //     }
        //     ajaxSaveDatas(arr_params)
        // })
    </script>
@endpush
