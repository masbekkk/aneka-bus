<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Title -->
    <title>Modernize Landing Page</title>
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('landingpage/dist/images/logos/favicon.ico') }}">
    <!--  Aos -->
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/dist/css/style.min.css') }}">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css')}}" />
    <style>
        /* .carousel-item img {
            max-width: 100%;
            height: auto;
        } */

        .carousel-item {
            overflow: hidden;
            border-radius: 20px;
        }

        .carousel-item img {
            height: 330px;
            object-fit: cover;
            object-position: center;
            border-radius: 20px;
        }
    </style>

</head>

<body>
    <div class="page-wrapper p-0 overflow-hidden">
        <header class="header">
            <nav class="navbar navbar-expand-lg py-3">
                <div class="container">
                    <a class="navbar-brand me-0 py-0" href="index.html">
                        <img src="{{ asset('landingpage/dist/images/logos/logo-dark.svg') }}" alt="img-fluid">
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
                            <li class="nav-item dropdown hover-dd mega-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Demos <span
                                        class="d-flex align-items-center">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animate-up p-4">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <h5 class="fs-5 fw-bolder">Different Demos</h5>
                                            <h6 class="text-muted">Included with the Package</h6>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center my-4">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/demos/demo-main.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/main/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Main</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="../landingpage/dist/images/demos/demo-dark.jpg"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/dark/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Dark</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/demos/demo-horizontal.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/horizontal/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Horizontal</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/demos/demo-minisidebar.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/minisidebar/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Minisidebar</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/demos/demo-rtl.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/rtl/index.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">RTL</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-md-12">
                                            <h5 class="fs-5 fw-semibold mt-8">Different Apps</h5>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/apps/app-calendar.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank"
                                                            href="../package/html/main/app-calendar.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Calendar</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/apps/app-chat.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/main/app-chat.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Chat</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="{{ asset('landingpage/dist/images/apps/app-email.jpg') }}"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank" href="../package/html/main/app-email.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Email</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="../landingpage/dist/images/apps/app-contact.jpg"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank"
                                                            href="../package/html/main/app-contact2.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Contact</h6>
                                                </div>
                                                <div class="col">
                                                    <div
                                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                                        <img src="../landingpage/dist/images/apps/app-invoice.jpg"
                                                            alt="" class="img-fluid">
                                                        <a target="_blank"
                                                            href="../package/html/main/app-invoice.html"
                                                            class="btn btn-primary lp-demos-btn fs-2 p-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                                            Preview</a>
                                                    </div>
                                                    <h6 class="mb-0 text-center fw-bolder fs-3">Invoice</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hover-dd mega-dropdown pages-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Pages <span
                                        class="d-flex align-items-center">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animate-up py-0">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="p-4">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-chat.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-chat.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Chat Application</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">New
                                                                            messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-invoice.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-invoice.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Invoice App</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">Get
                                                                            latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-contact2.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-mobile.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Contact Application</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">2
                                                                            Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-email.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-message-box.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Email App</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">Get
                                                                            new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a target="_blank"
                                                                    href="../package/html/main/page-user-profile.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-cart.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            User Profile</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">learn
                                                                            more information</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-calendar.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-date.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Calendar App</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">Get
                                                                            dates</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-contact.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Contact List Table</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">Add
                                                                            new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a target="_blank"
                                                                    href="../package/html/main/app-notes.html"
                                                                    class="d-flex align-items-center pb-7 position-relative lh-base">
                                                                    <div
                                                                        class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img src="../landingpage/dist/images/svgs/icon-dd-application.svg"
                                                                            alt="" class="img-fluid"
                                                                            width="24" height="24">
                                                                    </div>
                                                                    <div class="d-inline-block">
                                                                        <h6
                                                                            class="mb-1 fw-semibold text-hover-primary">
                                                                            Notes Application</h6>
                                                                        <span
                                                                            class="fs-2 d-block fw-normal text-muted">To-do
                                                                            and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative p-4 border-start h-100">
                                                <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                                                <ul class="list-unstyled">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/page-pricing.html">Pricing
                                                            Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/authentication-login.html">Authentication
                                                            Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/authentication-register.html">Register
                                                            Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/authentication-error.html">404
                                                            Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/app-notes.html">Notes App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/page-user-profile.html">User
                                                            Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold text-dark text-hover-primary"
                                                            target="_blank"
                                                            href="../package/html/main/page-account-settings.html">Account
                                                            Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../docs/index.html"
                                    target="_blank">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="https://adminmart.com/support/"
                                    target="_blank">Support</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="btn btn-primary fs-3 rounded btn-hover-shadow px-3 py-2"
                                    href="../package/html/main/authentication-login.html">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="body-wrapper overflow-hidden">
            <section class="hero-section position-relative overflow-hidden mb-2 mt-3 mb-lg-11 py-3">
                <div class="container-fluid">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                aria-label="Slide 7"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_3403-qqouq5t272dh61t6ujsqn7u6ylvlj3yxd9zjgjbusg.png"
                                    class="d-block w-100" alt="IMG_3403">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_8389-qqouq9keyeimghnq8lf8x6w1c5d2dwdupslhdn6a3k.jpeg"
                                    class="d-block w-100" alt="IMG_8389">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/8298ae13-6707-49ba-ba1a-04d239cf07ba-qqouqai958jws3md33tvhonhxj8fllhl1x8yux4vxc.jpg"
                                    class="d-block w-100" alt="8298ae13-6707-49ba-ba1a-04d239cf07ba">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/b4dd4132-d1b1-42ce-b30d-17f69c079ff7-qqouqbg3c2l73pkzxm8i26eyix3stalbe1wgc73hr4.jpg"
                                    class="d-block w-100" alt="b4dd4132-d1b1-42ce-b30d-17f69c079ff7">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/c6b94d66-e547-4261-82a0-941a630b9ae6-qqouqcdxiwmhfbjms4n4mo6f4az60zp1q6jxth23kw.jpeg"
                                    class="d-block w-100" alt="c6b94d66-e547-4261-82a0-941a630b9ae6">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/f1ca43b9-2d31-4d58-9248-f32f58a15059-qqouqdbrpqnrqxi9mn1r75xvpouj8oss2b7far0peo.jpeg"
                                    class="d-block w-100" alt="f1ca43b9-2d31-4d58-9248-f32f58a15059">
                            </div>
                            <div class="carousel-item">
                                <img src="https://preview2.project-webcare.com/wp-content/uploads/elementor/thumbs/IMG_3399-qqouqe9lwkp22jgwh5gdrnpcb2pwgdwiefuws0zb8g.jpg"
                                    class="d-block w-100" alt="IMG_3399">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
            <section class="production pb-10 pb-md-14 py-3" id="production-template">
                <div class="container">
                    <!--  Row 1 -->
                    <div class="card border-primary">
                        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4 active"
                                    id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pesan-tiket"
                                    type="button" role="tab" aria-controls="pills-account"
                                    aria-selected="true">
                                    <i class="fas fa-ticket-alt"></i>
                                    <span class="d-none d-md-block ms-2"> Pesan Tiket</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                                    id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#kirim-barang"
                                    type="button" role="tab" aria-controls="pills-account"
                                    aria-selected="true">
                                    <i class="fas fa-truck"></i>
                                    <span class="d-none d-md-block ms-2"> Kirim Barang</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                                    id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#sewa-bus"
                                    type="button" role="tab" aria-controls="pills-account"
                                    aria-selected="true">
                                    <i class="fas fa-bus"></i>
                                    <span class="d-none d-md-block ms-2"> Sewa Bus</span>
                                </button>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="pesan-tiket" role="tabpanel"
                                    aria-labelledby="pesan-tiket-tab">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex align-items-stretch">
                                            <div class="card w-100 position-relative overflow-hidden">
                                                <div class="card-body p-4">
                                                    <h5 class="card-title fw-semibold">Pesan Tiket</h5>
                                                    <p class="card-subtitle mb-4">Pilih Tanggal dan Lokasi
                                                        Keberangkatan serta Destinasi Perjalananmu disini</p>
                                                    <form class="mt-3" action="{{ route('tiket-bus.store') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="lokasi_dari_id" class="form-label">Lokasi
                                                                Dari</label>
                                                            <select class="form-select" name="route_source"
                                                                id="lokasi_dari_id" required>
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
                                                            <select class="form-select" name="route_destination"
                                                                id="lokasi_tujuan_id" required>
                                                                @foreach ($routes as $route)
                                                                    <option value="{{ $route->id }}">
                                                                        {{ $route->route_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal_jadwal_keberangkatan"
                                                                class="form-label">Tgl.
                                                                Keberangkatan</label>
                                                            <div class="input-group date"
                                                                id="tanggal_jadwal_keberangkatan">
                                                                <input type="text" class="form-control"
                                                                    id="date" />
                                                                <span class="input-group-append">
                                                                    <span class="input-group-text bg-light d-block">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            {{-- <input type="text" class="form-control" id="tanggal_jadwal_keberangkatan"
                                                        placeholder="Tgl. Keberangkatan" value="03-07-2024" readonly required> --}}
                                                        </div>
                                                        <button id="btnSearch" class="btn btn-warning w-100"
                                                            type="submit">
                                                            <i class="fas fa-search"></i> Cari Tiket
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kirim-barang" role="tabpanel"
                                    aria-labelledby="kirim-barang-tab">
                                    <!-- Content for Kirim Barang -->
                                </div>
                                <div class="tab-pane fade" id="sewa-bus" role="tabpanel"
                                    aria-labelledby="sewa-bus-tab">
                                    <!-- Content for Sewa Bus -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div class="d-sm-flex align-items-center text-center gap-2 justify-content-center mb-7">
                                <ul
                                    class="list-unstyled d-flex align-items-center justify-content-center justify-content-sm-start mb-2 mb-sm-0">
                                    <li class="">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="../landingpage/dist/images/profile/user-1.jpg" alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="../landingpage/dist/images/profile/user-2.jpg" alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                    <li class="ms-n2">
                                        <a class="d-block" href="javascript:void(0)">
                                            <img src="../landingpage/dist/images/profile/user-3.jpg" alt=""
                                                class="img-fluid border border-2 rounded-circle border-white"
                                                width="32" height="32">
                                        </a>
                                    </li>
                                </ul>
                                <p class="mb-0 fw-semibold fs-4 text-dark">
                                    <span>52,589+</span> developers & agencies using our templates
                                </p>
                            </div>
                            <h2 class="text-center mb-0 fs-9 fw-bolder">Production Ready & Developer Friendly Bootstrap
                                Admin
                                Template</h2>
                        </div>
                    </div>
                    <div class="domo-contect position-relative">
                        <div class="demos-view mt-11 pt-lg-8">
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/demos/demo-main.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Main</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/demos/demo-dark.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/dark/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Dark</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/demos/demo-horizontal.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/horizontal/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Horizontal</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/demos/demo-minisidebar.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/minisidebar/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Minisidebar</h6>
                                </div>
                                <div class="col-sm-6 col-lg-4 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/demos/demo-rtl.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/rtl/index.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">RTL</h6>
                                </div>
                            </div>
                        </div>
                        <div class="demos-view mt-4">
                            <div
                                class="badge text-bg-primary text-center mb-8 fs-4 py-6 px-4 d-table mx-auto rounded-pill">
                                Apps</div>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-calendar.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-calendar.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Calendar</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-chat.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-chat.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Chat</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-email.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-email.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Email</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-contact.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-contact2.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Contact</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-invoice.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-invoice.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Invoice</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/modernize-bt-app-contact-list.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/app-contact.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Contact List</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-user-profile.jpg" alt=""
                                            class="img-fluid">
                                        <a target="_blank" href="../package/html/main/page-user-profile.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">User Profile</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/modernize-vue-app-blog.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/blog-posts.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Blog</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/modernize-vue-app-blog-detail.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/blog-detail.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">Blog Detail</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/modernize-vue-app-shop.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/eco-shop.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce Shop</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-ecommerce-detail.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/eco-shop-detail.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce Detail</h6>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-8">
                                    <div
                                        class="border d-block rounded-1 mb-2 position-relative lp-demos-box overflow-hidden">
                                        <img src="../landingpage/dist/images/apps/app-ecommerce-list.jpg"
                                            alt="" class="img-fluid">
                                        <a target="_blank" href="../package/html/main/eco-product-list.html"
                                            class="btn btn-primary lp-demos-btn fs-3 px-7 py-1 rounded position-absolute top-50 start-50 translate-middle">Live
                                            Preview</a>
                                    </div>
                                    <h6 class="mb-0 text-center fs-3">eCommerce List</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </section>
            <section class="bg-light py-5 py-lg-10 py-xl-12">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <h2 class="fs-9 text-center mb-5 fw-bolder">Increase speed of your development and launch
                                quickly
                                with Modernize</h2>
                        </div>
                    </div>
                    <div class="sliding-wrapper position-relative overflow-hidden">
                        <div class="slide-background d-flex flex-row w-100">
                            <div class="slide">
                                <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                                    height="100%">
                            </div>
                            <div class="slide">
                                <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                                    height="100%">
                            </div>
                            <div class="slide">
                                <img src="../landingpage/dist/images/slider/slider-group.png" alt="slide"
                                    height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review-section pt-5 pt-lg-10 pt-xl-12 pb-8 pb-lg-9">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fs-9 text-center mb-4 mb-lg-5 fw-bolder" data-aos="fade-up"
                                data-aos-delay="200" data-aos-duration="1000">Don’t just take our words for it, See
                                what developers
                                like you are saying</h2>
                        </div>
                    </div>
                    <div class="review-slider" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped
                                            me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped
                                            me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped
                                            me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has helped
                                            me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has
                                            helped me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle" width="40"
                                                    height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle"
                                                    width="40" height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-1.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle"
                                                    width="40" height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Jenny Wilson</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 mb-0 text-dark">The dashboard template from adminmart has
                                            helped me provide a clean
                                            and sleek look to my dashboard and made it look exactly the way I wanted it
                                            to, mainly without
                                            having.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-2.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle"
                                                    width="40" height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Minshan Cui</h6>
                                                    <p class="mb-0 text-dark">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">The quality of design is excellent,
                                            customizability and flexibility
                                            much better than the other products available in the market. I strongly
                                            recommend the AdminMart to
                                            other buyers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../landingpage/dist/images/profile/user-3.jpg"
                                                    alt="" class="w-auto me-3 rounded-circle"
                                                    width="40" height="40">
                                                <div>
                                                    <h6 class="fs-4 mb-1 fw-semibold">Eminson Mendoza</h6>
                                                    <p class="mb-0 fw-normal">Features avaibility</p>
                                                </div>
                                            </div>
                                            <div>
                                                <ul
                                                    class="list-unstyled d-flex align-items-center justify-content-end gap-1 mb-0">
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <img src="../landingpage/dist/images/svgs/icon-star.svg"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="fs-4 text-dark mb-0">This template is great, UI-rich and up-to-date.
                                            Although it is pretty
                                            much complete, I suggest to improve a bit of documentation. Thanks & Highly
                                            recomended!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features-section py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center" data-aos="fade-up" data-aos-delay="600"
                                data-aos-duration="1000">
                                <small class="text-primary fw-bold mb-2 d-block fs-3">ALMOST COVERED
                                    EVERYTHING</small>
                                <h2 class="fs-9 text-center mb-4 mb-lg-9 fw-bolder">Other Amazing Features &
                                    Flexibility Provided</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-wand text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">6 Theme Colors</h5>
                                <p class="mb-0 text-dark">We have included 6 pre-defined Theme Colors with Elegant
                                    Admin.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-layout-sidebar text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Dark & Light Sidebar</h5>
                                <p class="mb-0 text-dark">Included Dark and Light Sidebar for getting desire look and
                                    feel.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-archive text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">425+ Page Templates</h5>
                                <p class="mb-0 text-dark">Yes, we have 5 demos & 79+ Pages per demo to make it easier.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-adjustments text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">150+ UI Components</h5>
                                <p class="mb-0 text-dark">Almost 150+ UI Components being given with Modernize Admin
                                    Pack.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-tag text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Bootstrap 5x</h5>
                                <p class="mb-0 text-dark">Its been made with Bootstrap 5 and full responsive layout.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-diamond text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">200+ Font Icons</h5>
                                <p class="mb-0 text-dark">Lots of Icon Fonts are included here in the package of
                                    Elegant Admin.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-device-desktop text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Fully Responsive</h5>
                                <p class="mb-0 text-dark">All the layout of Modernize Admin is Fully Responsive and
                                    widely tested.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1000"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-database text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">SassBase CSS</h5>
                                <p class="mb-0 text-dark">Our Css is written Sass Base to make your life easier.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-arrows-shuffle text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Easy to Customize</h5>
                                <p class="mb-0 text-dark">Customization will be easy as we understand your pain.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-chart-pie text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Lots of Chart Options</h5>
                                <p class="mb-0 text-dark">You name it and we have it, Yes lots of variations for
                                    Charts.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-layers-intersect text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Lots of Table Examples</h5>
                                <p class="mb-0 text-dark">Data Tables are initial requirement and we added them.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1200"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-refresh text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Regular Updates</h5>
                                <p class="mb-0 text-dark">We are constantly updating our pack with new features.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-book text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Detailed Documentation</h5>
                                <p class="mb-0 text-dark">We have made detailed documentation, so it will easy to use.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-calendar text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Calendar Design</h5>
                                <p class="mb-0 text-dark">Calendar is available with our package & in nice design.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="1400"
                            data-aos-duration="1000">
                            <div class="text-center mb-5">
                                <i class="d-block ti ti-brand-wechat text-primary fs-10"></i>
                                <h5 class="fs-5 fw-semibold mt-8">Dedicated Support</h5>
                                <p class="mb-0 text-dark">We believe in supreme support is key and we offer that.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-8 pt-md-5 pb-5 pb-lg-10 pb-xl-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card c2a-box" data-aos="fade-up" data-aos-delay="1600"
                                data-aos-duration="1000">
                                <div class="card-body text-center p-4 pt-8">
                                    <h3 class="fs-7 fw-semibold pt-6">Haven't found an answer to your question?</h3>
                                    <p class="mb-8 pb-2 text-dark">Connect with us either on discord or email us</p>
                                    <div class="d-sm-flex align-items-center justify-content-center gap-3 mb-4">
                                        <a href="https://discord.com/invite/eMzE8F6Wqs" target="_blank"
                                            class="btn btn-primary d-block mb-3 mb-sm-0 btn-hover-shadow"
                                            type="button">Ask on Discord</a>
                                        <a href="https://adminmart.com/support" target="_blank"
                                            class="btn btn-outline-secondary d-block" type="button">Submit
                                            Ticket</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-primary pt-5 pt-xl-9 pb-8">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 col-xl-5 pt-lg-5 mb-5 mb-lg-0">
                            <h2 class="fs-12 text-white text-center text-lg-start fw-bolder mb-8">Build your app with
                                our highly
                                customizable Bootstrap based Dashboard</h2>
                            <div
                                class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                                <a href="../package/html/main/authentication-login.html"
                                    class="btn bg-white text-primary fw-semibold d-block mb-3 mb-sm-0 btn-hover-shadow">Login</a>
                                <a href="../package/html/main/authentication-register.html"
                                    class="btn border-white text-white fw-semibold btn-hover-white d-block">Register</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                            <div class="text-center text-lg-end">
                                <img src="../landingpage/dist/images/backgrounds/business-woman-checking-her-mail.png"
                                    alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <footer class="footer-part pt-8 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="index-new.html">
                                <img src="../landingpage/dist/images/logos/favicon.ico" alt=""
                                    class="img-fluid pb-3">
                            </a>
                            <p class="mb-0 text-dark">All rights reserved by Modernize. Designed & Developed by <a
                                    class="text-dark text-hover-primary border-bottom border-primary"
                                    href="https://adminmart.com/">AdminMart.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="offcanvas offcanvas-start modernize-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header p-4">
                <img src="../landingpage/dist/images/logos/logo-dark.svg" alt="" class="img-fluid"
                    width="150">
            </div>
            <div class="offcanvas-body p-4">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Demos
                            <i class="ti ti-chevron-down fs-14"></i></a>
                        <ul class="dropdown-menu ps-2">
                            <li>
                                <a class="dropdown-item text-dark" href="../package/html/dark/index.html">Dark</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark"
                                    href="../package/html/horizontal/index.html">Horizontal</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" href="../package/html/main/index.html">LTR</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark"
                                    href="../package/html/minisidebar/index.html">Minisidebar</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-dark" href="../package/html/rtl/index.html">RTL</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mt-3 dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages
                            <i class="ti ti-chevron-down fs-14"></i></a>
                        <div class="dropdown-menu mt-3 ps-1">
                            <!-- apps -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="position-relative">
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-chat.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Chat Application</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">New messages
                                                    arrived</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-invoice.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Invoice App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get latest
                                                    invoice</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-mobile.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Contact Application
                                                </h6>
                                                <span class="fs-2 d-block fw-normal text-muted">2 Unsaved
                                                    Contacts</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-message-box.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Email App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-cart.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">User Profile</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">learn more
                                                    information</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-date.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Calendar App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-lifebuoy.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Contact List Table
                                                </h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center pb-7 position-relative lh-base">
                                            <div
                                                class="bg-light rounded me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../landingpage/dist/images/svgs/icon-dd-application.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24">
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 fw-semibold text-hover-primary">Notes Application</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">To-do and Daily
                                                    tasks</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- quick links -->
                                    <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
                                    <ul class="list-unstyled px-1">
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="#">Pricing Page</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="#">Authentication Design</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="#">Register Now</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary" href="#">404
                                                Error Page</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary" href="#">Notes
                                                App</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary" href="#">User
                                                Application</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="fw-semibold text-dark text-hover-primary"
                                                href="#">Account Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="../docs/index.html">Documentation</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark" href="#">Pages</a>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <a href="../package/html/main/authentication-login.html"
                        class="btn btn-primary w-100 py-2">Login</a>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('landingpage/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/dist/js/custom.js') }}"></script>
    <script>
        // change URL Js
        $(function() {
            let currentURL =
                window.location != window.parent.location ?
                document.referrer :
                document.location.href;
            if (currentURL == "https://themeforest.net/") {
                $("a.download-link").attr(
                    "href",
                    "#"
                );
            } else {
                $("a.download-link").attr(
                    "href",
                    "https://adminmart.com/product/modernize-react-mui-dashboard-template/"
                );
            }
        });

        $(document).ready(function() {
            // Initialize Bootstrap Carousel
            $('#carouselExampleIndicators').carousel();
        });
    </script>
</body>

</html>
