<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .navbar .form-control {
            background-color: #e2e6ea; 
            color: black; 
            border: 1px solid #ced4da; 
        }

        .navbar .btn-outline-light {
            color: black; 
            background-color: #e2e6ea; 
            border-color: #ced4da; 
        }

        .navbar .btn-outline-light:hover {
            background-color: #d6d9db; 
            border-color: #ced4da; 
        }

        .navbar .input-group-text {
            background-color: #e2e6ea; 
            border: 1px solid #ced4da; 
            color: black; 
    </style>
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

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>