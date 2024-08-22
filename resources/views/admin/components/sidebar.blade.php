<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img text-dark fs-6">
                Aneka Bus
                {{-- <img src="../../dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                <img src="../../dist/images/logos/light-logo.svg" class="light-logo" width="180" alt="" /> --}}
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-dark"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4 "></i>
                    <span class="hide-menu text-dark">Tiket Offline</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin-order.index')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Pesan Offline</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4 "></i>
                    <span class="hide-menu text-dark">Edit</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('ticket.add')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Add Tiket(Jika rute dan tipe bus belum ada)</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('create.newticket')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Add Tiket(Jika rute dan bus ada)</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('tickets.index-times')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Edit Jam Tiket</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.index-all-tiket')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">All Tiket</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('create.routebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Bus Route</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('add.typebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Type Bus</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('index.routebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">All Bus Route</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('index.typebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">All Type Bus</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4 "></i>
                    <span class="hide-menu text-dark">Transaksi</span>
                </li>



                @php
    $shownSources = [];
    $ticketToShow = [];

    foreach ($ticket as $tkt) {
        if (is_object($tkt) && isset($tkt->source) && isset($tkt->destination)) {

            if (!in_array($tkt->source->id, $shownSources)) {

                $shownSources[] = $tkt->source->id;

                $ticketToShow[] = $tkt;

            }
        }
    }
@endphp

@foreach ($ticketToShow as $tkt)
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => $tkt->source->id, 'destination' => $tkt->destination->id])}}" aria-expanded="false">
            <span>
                <i class="ti ti-currency-dollar"></i>
            </span>
            <span class="hide-menu">{{ $tkt->source->route_name }} - {{ $tkt->destination->route_name }} </span>
        </a>
    </li>
@endforeach







            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
