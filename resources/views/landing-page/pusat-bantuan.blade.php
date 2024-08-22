@extends('layouts.layouts')

@section('fixed-header')
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
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#Beranda" target="">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('armada-kami')}}">Armada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#tentang-kami">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('pusat-bantuan')}}">Pusat Bantuan</a>
                    </li>
                </ul>
                <form class="d-flex" action="{{ route('admin-order.index') }}" method="GET" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <div class="input-group">
                        <input class="form-control" type="text" name="search" placeholder="Cari Tiket" aria-label="Cari Tiket">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
@endsection
@section('off-canvas')
    <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header p-4">
            {{-- <img src="../landingpage/dist/images/logos/logo-dark.svg" alt="" class="img-fluid"
        width="150"> --}}
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="150">
        </div>
        <div class="offcanvas-body p-4">
            <ul class="navbar-nav justify-content-end flex-grow-1 navbar-example3">

                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page"
                        href="{{ route('landing-page') }}#pesan-tiket">Cari Tiket</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page"
                        href="{{ route('landing-page') }}#kirim-barang">Kirim Barang</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page" href="{{ route('landing-page') }}#sewa-bus">Sewa
                        Bus</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page" href="{{ route('armada-kami') }}">Armada
                        Kami</a>
                </li>
                {{-- <li class="nav-item mt-3">
            <a class="nav-link fs-3 text-dark" aria-current="page" href=""
                >Akun Saya</a>
        </li> --}}
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page"
                        href="{{ route('landing-page') }}#armada-kami">Kontak Kami</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page"
                        href="{{ route('landing-page') }}#tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link fs-3 text-dark" aria-current="page" href="{{ route('pusat-bantuan') }}">Pusat
                        Bantuan</a>
                </li>
            </ul>
            {{-- <form class="d-flex mt-3" role="search">
        <a href="../package/html/main/authentication-login.html"
            class="btn btn-primary w-100 py-2">Login</a>
    </form> --}}
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">FAQ</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="/">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Pusat Bantuan</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-7">
                    <h3 class="fw-semibold">Pusat Bantuan</h3>
                    <p class="fw-normal mb-0 fs-4">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                </div>
                <div class="accordion accordion-flush mb-5 card position-relative overflow-hidden"
                    id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is an Aneka?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is an Aneka?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is an Aneka?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="card bg-light-info rounded-2">
            <div class="card-body text-center">
                <div class="d-flex align-items-center justify-content-center mb-4 pt-8">
                    <a href="#">
                        <img src="../../dist/images/profile/user-3.jpg"
                            class="rounded-circle me-n2 card-hover border border-2 border-white" width="44"
                            height="44">
                    </a>
                    <a href="#">
                        <img src="../../dist/images/profile/user-2.jpg"
                            class="rounded-circle me-n2 card-hover border border-2 border-white" width="44"
                            height="44">
                    </a>
                    <a href="#">
                        <img src="../../dist/images/profile/user-1.jpg"
                            class="rounded-circle me-n2 card-hover border border-2 border-white" width="44"
                            height="44">
                    </a>
                </div>
                <h3 class="fw-semibold">Still have questions</h3>
                <p class="fw-normal mb-4 fs-4">Can't find the answer your're looking for ? Please chat to our friendly
                    team.</p>
                <a href="javascript:void(0)" class="btn btn-primary mb-8">Chat with us</a>
            </div>
        </div>
    </div>
@endsection
