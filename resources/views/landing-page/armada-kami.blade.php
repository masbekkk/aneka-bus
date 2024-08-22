@extends('layouts.layouts')

@section('fixed-header')
</head>
<body>
    <header class="header bg-dark text-white">
        <nav class="navbar navbar-expand-lg py-3 navbar-dark">
            <div class="container">
                <a class="navbar-brand me-3 py-0" href="{{ route('landing-page')}}">
                    <img src="{{ asset('images/LOGO BUSGAZE.png')}}" width="150" alt="img-fluid">
                </a>
                <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fas fa-bars fs-4"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center mb-2 mb-lg-0 me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#Beranda" target="">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('armada-kami')}}">Armada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('pusat-bantuan')}}">Pusat Bantuan</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="{{ route('admin-order.index') }}" method="GET" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="form-control" type="text" name="search" placeholder="Cari Tiket" aria-label="Cari Tiket">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
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
    @php
        $aneka = [
            '2ed59a77-c34e-4cf7-ae03-0228f22cc524.jpg',
            '5767c3be-4c65-4d0f-8be6-2c241b0e9339.jpg',
            'a9518d66-0e41-49dc-9cb9-a38f670ceac8.jpg',
            'c264cd7b-270d-4d70-bb2f-7537a1d3ec82.jpg',
            'ffa5e648-c39d-4742-9a0f-218f078eb840.jpg',
            'IMG_8205.JPG',
            'IMG_8206.JPG',
            'IMG_8207.JPG',
            'IMG_8291.JPG',
            'IMG_8292.JPG',
            'IMG_8293.JPG',
            'IMG_8294.JPG',
            'IMG_8295.JPG',
            'IMG_8296.JPG',
            'IMG_8389.JPG',
            'Photo 2024-03-12 03.17.10 PM.jpg',
        ];

        $sejahtera = [
            '7bd02bcd-2cbb-462b-ad6f-db65aac75a1e.jpg',
            '1c69e78f-47ff-4ae9-aeef-be4857fd5cae.jpg',
            '2da335d2-c2d3-4114-ae2c-b1e55505d39d.jpg',
            '3c41cd38-7b63-4234-80d0-0961dc3d24ae.jpg',
            '3dce44de-393c-4f9d-a58a-8692197ee977.jpg',
            '5ad90648-8f91-464c-ab1a-80d51fb98d77.jpg',
            '07f8da25-e9a7-4667-b00e-6df1b640f15e.jpg',
            '8aafbdfc-5cb0-4526-b1a4-927a94d63c96.jpg',
            '26ec7dcf-ff44-462a-97e9-41f3bd988de1.jpg',
            '53b48d87-087a-4f7b-8535-129afd014150.jpg',
            '93c1f813-7d61-4d97-8b54-8d66cd48fe62.jpg',
            '378f5f1f-bf18-4a44-9299-99661dfaae18.jpg',
            '401b6f54-0d6f-4d87-b422-915a41fc47f4.jpg',
            '466c0f87-1c83-4f1a-8398-376e64320ecb.jpg',
            '3460d93a-db98-4cc5-b886-7fe0572fc589.jpg',
            '8298ae13-6707-49ba-ba1a-04d239cf07ba.jpg',
            '82759f95-a356-4b6d-8f11-75fe78a552f0.jpg',
            '7996012f-02eb-44d6-9521-a3a6229486f0.jpg',
            'a82c62c2-e812-4d93-884a-59d2238b996e.jpg',
            'acfcf8ec-9950-4570-b46c-6f090f2d3d79.jpg',
            'b5dc2169-64fa-4cc1-8a31-d7e33f384216.jpg',
            'b7e8fc89-7b59-45aa-ab19-3670d960ff33.jpg',
            'b9164c60-8ca0-4372-8811-8023dbedb88d.jpg',
            'bb630693-8238-4f93-86d1-1efe5b7ea442.jpg',
            'bcc564f8-73be-48ac-bd6f-2460d95ee0b0.jpg',
            'c6b94d66-e547-4261-82a0-941a630b9ae6.jpg',
            'd1757710-2913-4859-9f12-e06bcd8d68f5.jpg',
            'df2a6db8-b133-4711-adcd-cadec7c9f7c5.jpg',
            'e0589020-6444-4d46-8f61-ab4703dc1585.jpg',
            'ebeba6a1-98ee-45e0-9d78-d5289eb49166.jpg',
            'f1ca43b9-2d31-4d58-9248-f32f58a15059.jpg',
            'f03cb8c2-bf85-49b0-9f97-a2756d1f5667.jpg',
            'f6a64f76-e0e3-4ca1-88ee-991160a7c7ae.jpg',
            'fdb4dd45-259b-4b99-a445-a268b15fa899.jpg',
            'fdfae647-3207-462a-b4a1-470fe11b2b69.jpg',
            'IMG_8171.JPG',
            'IMG_8208.JPG',
            'IMG_8209.JPG',
            'IMG_8210.JPG',
            'IMG_8211.JPG',
            'IMG_8212.JPG',
            'IMG_8213.JPG',
            'IMG_8213(1).JPG',
            'IMG_8213(2).JPG',
            'IMG_8214.JPG',
            'IMG_8214(1).JPG',
            'IMG_8215.JPG',
            'IMG_8215(1).JPG',
            'IMG_8215(2).JPG',
            'IMG_8216.JPG',
            'IMG_8216(1).JPG',
            'IMG_8216(2).JPG',
            'IMG_8217.JPG',
            'IMG_8218.JPG',
            'IMG_8219.JPG',
            'IMG_8220.JPG',
            'IMG_8221.JPG',
            'IMG_8222.JPG',
            'IMG_8223.JPG',
            'IMG_8224.JPG',
            'IMG_8225.JPG',
            'IMG_8226.JPG',
            'IMG_8227.JPG',
            'IMG_8228.JPG',
            'IMG_8232.JPG',
            'IMG_8278.JPG',
            'IMG_8279.JPG',
            'IMG_8280.JPG',
            'IMG_8281.JPG',
            'IMG_8282.JPG',
            'IMG_8283.JPG',
            'IMG_8284.JPG',
            'IMG_8285.JPG',
            'IMG_8286.JPG',
            'IMG_8287.JPG',
            'IMG_8288.JPG',
            'IMG_8289.JPG',
            'IMG_8290.JPG',
        ];

    @endphp
    <section class="production pb-10 pb-md-14 py-3" id="production-template">
        <div class="container">
            <h2 class="text-center mb-0 fs-9 fw-bolder">Armada Kami</h2>
            <!-- Gallery -->
            <div class="demos-view mt-4">
                <div class="badge text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill mt-3 bg-header">
                    ANEKA TRANSPORT
                </div>
                <div class="row">
                    @foreach (collect($aneka)->chunk(3) as $chunk)
                        <div class="col-lg-4 col-md-6 mb-4">
                            @foreach ($chunk as $img)
                                <img src="{{ asset('images/armada-kami/aneka-transport/' . $img) }}"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Transport Image" />
                            @endforeach
                        </div>
                    @endforeach
                </div>
            
                <div class="badge text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill mt-3 bg-header">
                    SEJAHTERA TRANSPORT
                </div>
                <div class="row">
                    @foreach (collect($sejahtera)->chunk(3) as $chunk)
                        <div class="col-lg-4 col-md-6 mb-4">
                            @foreach ($chunk as $img)
                                <img src="{{ asset('images/armada-kami/sejahtera-transport/' . $img) }}"
                                    class="w-100 shadow-1-strong rounded mb-4" alt="Transport Image" />
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            
            {{-- <div class="demos-view mt-4">
                <div class="badge text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill mt-3 bg-header">
                    ANEKA
                    TRANSPORT</div>
                <div class="row justify-content-center">
                    @foreach ($aneka as $img)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                            <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                <img src="{{ asset('images/armada-kami/aneka-transport/' . $img) }}" alt=""
                                    style="width: 100%; height: 20rem;">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="badge text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill mt-3 bg-header">
                    SEJAHTERA
                    TRANSPORT</div>
                <div class="row justify-content-center">
                    @foreach ($sejahtera as $img)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                            <div class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                <img src="{{ asset('images/armada-kami/sejahtera-transport/' . $img) }}" alt=""
                                    style="width: 100%; height: 20rem;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </section>
@endsection
