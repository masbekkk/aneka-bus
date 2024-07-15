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
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('landing-page')}}#pesan-tiket"
                            target="">Cari Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('landing-page')}}#kirim-barang">Kirim Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('landing-page')}}#sewa-bus">Sewa Bus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('armada-kami')}}">Armada Kami</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../docs/index.html"
                            target="_blank">Akun Saya</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('landing-page')}}#armada-kami">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('landing-page')}}#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('pusat-bantuan')}}">Pusat Bantuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
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
                                <li class="breadcrumb-item"><a class="text-muted" href="./index.html">Home</a></li>
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
                    <h3 class="fw-semibold">Frequently asked questions</h3>
                    <p class="fw-normal mb-0 fs-4">Get to know more about ready-to-use admin dashboard templates</p>
                </div>
                <div class="accordion accordion-flush mb-5 card position-relative overflow-hidden"
                    id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is an Admin Dashboard?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Admin Dashboard is the backend interface of a website or an application that helps to manage
                                the
                                website's overall content and settings. It is widely used by the site owners to keep track
                                of their
                                website,
                                make changes to their content, and more.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What should an admin dashboard template include?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Admin dashboard template should include user &amp; SEO friendly design with a variety of
                                components and
                                application designs to help create your own web application with ease. This could include
                                customization
                                options, technical support and about 6 months of future updates.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Why should I buy admin templates from AdminMart?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                Adminmart offers high-quality templates that are easy to use and fully customizable. With
                                over 101,801
                                happy customers &amp; trusted by 10,000+ Companies. AdminMart is recognized as the leading
                                online source
                                for buying admin templates.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapsefour">
                                Do Adminmart offers a money back guarantee?
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fw-normal">
                                There is no money back guarantee in most companies, but if you are unhappy with our product,
                                Adminmart
                                gives you a 100% money back guarantee.
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
