<div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
aria-labelledby="offcanvasNavbarLabel">
<div class="offcanvas-header p-4">
    {{-- <img src="../landingpage/dist/images/logos/logo-dark.svg" alt="" class="img-fluid"
        width="150"> --}}
        <img src="{{ asset('images/logo.png')}}" alt="" class="img-fluid"
        width="150">
</div>
<div class="offcanvas-body p-4">
    <ul class="navbar-nav justify-content-end flex-grow-1 navbar-example3">

        <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="#pesan-tiket"
                >Beranda</a>
        </li>
        <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="#kirim-barang"
                >Armada</a>
        </li>
        {{-- <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href=""
                >Akun Saya</a>
        </li> --}}
        <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="#armada-kami"
                >Kontak</a>
        </li>
        <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="#tentang-kami"
                >Tentang Kami</a>
        </li>
        <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href="{{ route('pusat-bantuan')}}">Pusat Bantuan</a>
        </li>
    </ul>
    {{-- <form class="d-flex mt-3" role="search">
        <a href="../package/html/main/authentication-login.html"
            class="btn btn-primary w-100 py-2">Login</a>
    </form> --}}
</div>
</div>