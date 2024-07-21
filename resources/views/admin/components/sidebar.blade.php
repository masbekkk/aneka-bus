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
                    <span class="hide-menu text-dark">Transaksi</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => '1', 'destination' => '3'])}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <span class="hide-menu">Makassar - Mamuju </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => '1', 'destination' => '2'])}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <span class="hide-menu">Makassar - Palopo </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => '3', 'destination' => '1'])}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <span class="hide-menu">Mamuju - Makassar </span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('bus-reservation.index', ['source' => '2', 'destination' => '1'])}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <span class="hide-menu">Palopo - Makassar </span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
