<header class="header">
    <nav class="navbar navbar-expand-lg py-3 navbar-example3">
        <div class="container">
            <a class="navbar-brand me-0 py-0" href="{{ route('landing-page')}}">
                <img src="{{ asset('images/logo.png')}}" width="180" alt="img-fluid">
                {{-- <img src="{{ asset('landingpage/dist/images/logos/logo-dark.svg') }}" alt="img-fluid"> --}}
            </a>
            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="ti ti-menu-2 fs-9"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#pesan-tiket"
                            target="">Cari Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#kirim-barang">Kirim Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#sewa-bus">Sewa Bus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#armada-kami">Armada Kami</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../docs/index.html"
                            target="_blank">Akun Saya</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#armada-kami">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#tentang-kami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>