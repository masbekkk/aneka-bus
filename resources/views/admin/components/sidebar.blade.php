@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
       .sidebar-item.active {
    background-color: #0F4C75 !important;
    color: #ffffff !important;
}

.sidebar-item.active .sidebar-link {
    color: #ffffff !important;
}

    </style>
@endpush

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img text-dark fs-6">
                Aneka Bus
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-dark"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-dark">Tiket Offline</span>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('admin-order.index')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="hide-menu">Pesan Offline</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-dark">Edit</span>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('create.newticket')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-plus-circle"></i>
                        </span>
                        <span class="hide-menu">Add Tiket</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('ticket.add')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-plus-circle"></i>
                        </span>
                        <span class="hide-menu">Add Tiket + Rute & Bus</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('tickets.index-times')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-clock"></i>
                        </span>
                        <span class="hide-menu">Edit Jam Tiket</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('admin.index-all-tiket')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-list"></i>
                        </span>
                        <span class="hide-menu">All Tiket</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('create.routebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-map-signs"></i>
                        </span>
                        <span class="hide-menu">Bus Route</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('add.typebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-bus"></i>
                        </span>
                        <span class="hide-menu">Type Bus</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('index.routebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-map-pin"></i>
                        </span>
                        <span class="hide-menu">All Bus Route</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('index.typebus')}}" aria-expanded="false">
                        <span>
                            <i class="fas fa-bus"></i>
                        </span>
                        <span class="hide-menu">All Type Bus</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
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
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => $tkt->source->id, 'destination' => $tkt->destination->id])}}" aria-expanded="false">
                            <span>
                                <i class="ti ti-currency-dollar"></i>
                            </span>
                            <span class="hide-menu">{{ $tkt->source->route_name }} - {{ $tkt->destination->route_name }}</span>
                        </a>
                    </li>
                @endforeach

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
