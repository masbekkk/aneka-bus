 <div class="row">
     <div class="col-lg-12 d-flex align-items-stretch">
         <div class="card w-100 position-relative overflow-hidden">
             <div class="card-body p-4">
                 <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                 <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi
                     Keberangkatan serta Destinasi Perjalananmu disini</p>
                 <form class="mt-3" action="{{ route('tiket-bus.index') }}" method="GET" enctype="multipart/form-data">
                     {{-- @csrf --}}
                     <div class="mb-3">
                         <label for="lokasi_dari_id" class="form-label">Lokasi
                             Dari</label>
                         <select class="form-select" name="source" id="lokasi_dari_id" required>
                             @foreach ($routes as $route)
                                 <option value="{{ $route->id }}">
                                     {{ $route->route_name }}
                                 </option>
                             @endforeach

                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="lokasi_tujuan_id" class="form-label">Lokasi
                             Tujuan</label>
                         <select class="form-select" name="destination" id="lokasi_tujuan_id" required>
                             @foreach ($routes as $route)
                                 <option value="{{ $route->id }}">
                                     {{ $route->route_name }}
                                 </option>
                             @endforeach
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="tanggal_jadwal_keberangkatan" class="form-label">Tgl.
                             Keberangkatan</label>
                         <div class="input-group date" id="tanggal_jadwal_keberangkatan">
                             <input type="text" class="form-control" name="tgl" id="date" />
                             <span class="input-group-append">
                                 <span class="input-group-text bg-light d-block">
                                     <i class="fa fa-calendar"></i>
                                 </span>
                             </span>
                         </div>
                         {{-- <input type="text" class="form-control" id="tanggal_jadwal_keberangkatan"
                                                placeholder="Tgl. Keberangkatan" value="03-07-2024" readonly required> --}}
                     </div>
                     <button id="btnSearch" class="btn btn-primary w-100 btn-lg" type="submit">
                         <i class="fas fa-search"></i> Cari Tiket
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </div>
