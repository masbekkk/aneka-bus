<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusGaze</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #161F24;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .vh-100 {
            height: 100vh;
        }

        .text-bg {
            background-color: #000;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-white {
            color: white;
        }

        .text-center {
            text-align: center;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .slideInRight {
            animation: slideInRight 1s;
        }

        .slideInLeft {
            animation: slideInLeft 1s;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            border-radius: 0.5rem;
            margin-right: 10px;
            max-width: 200px; /* Increased width for better visibility */
            max-height: 150px; /* Adjusted height */
        }

        .ms-4 {
            margin-left: 1.5rem;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .review-section {
            padding: 60px 0;
        }

        .btn-light {
            color: #FFFFFF;
            background-color: #F24822;
            border: 1px solid #F24822;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            color: #161F24;
        }

        .fw-bolder {
            font-weight: bolder;
        }

        .fs-3 {
            font-size: 1.75rem;
        }

        small {
            font-size: 0.875rem;
        }

        .align-items-center {
            display: flex;
            align-items: center;
        }

        .justify-content-center {
            justify-content: center;
        }

        /* New Section with Dark Blue Background */
        .dark-blue-section {
            background-color: #0F4C75;
            padding: 60px 0;
        }

        .dark-blue-section .col-md-3 {
            margin-bottom: 20px;
        }

        .dark-blue-section img {
            width: 50px; /* Adjust icon size */
        }

        .dark-blue-section h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .dark-blue-section p {
            font-size: 0.875rem;
        }
        /* Updated CSS for Office Section */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #161F24;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .text-white {
            color: white;
        }

        .offices-section {
            background-color: #1c252b;
            padding: 20px 0;
        }

        .office-group {
            margin-top: 20px;
        }

        .office-location {
            background-color: #39414a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            margin-bottom: 20px;
        }

        .office-location img {
            width: 25px;
            height: 25px;
            margin-right: 15px;
        }

        .office-contact {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .office-contact img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        /* Flexbox for aligning heading and office group */
        .heading-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #F24822;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .heading-group h3 {
            margin: 0;
            color: white;
            font-size: 1.75rem;
        }

        .heading-group hr {
            flex-grow: 1;
            height: 2px;
            background-color: #F24822;
            border: none;
            margin-left: 15px;
        }
            .heading-group {
            border-bottom: 2px solid #F24822; /* Warna dan ketebalan garis bawah */
            padding-bottom: 10px; /* Ruang antara teks dan garis */
            margin-bottom: 20px; /* Ruang di bawah garis */
        }
            .offices-section h6 {
            position: relative;
            padding-bottom: 10px; /* Adjust as needed */
        }

            .offices-section h6::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40%;
            height: 3px; /* Thickness of the line */
            background-color: #F24822; /* New color code */
        }
             .right {
            display: flex;
            flex-direction: column;
            align-items: flex-end; /* Aligns content to the right */
            padding: 20px 0;
        }

            .right .col-md-12 {
            text-align: right; /* Aligns text to the right within the column */
            position: relative; /* Position relative to allow absolute positioning of the line */
        }

            .right .col-md-12 h6 {
            position: relative; /* Position relative to allow absolute positioning of the line */
            margin: 0; /* Removes default margins */
            padding-bottom: 10px; /* Space for the line */
        }

        .right .col-md-12 h6::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40%; /* Adjust width as needed */
            height: 3px; /* Thickness of the line */
            background-color: #F24822; /* Line color */
        }
                .right {
            display: flex;
            justify-content: flex-end; /* Aligns items to the end of the container */
        }

        .right .col-md-12 {
            position: relative; /* Required for absolute positioning of the pseudo-element */
        }

        .right .col-md-12 h6::after {
            content: "";
            position: relative;
            margin-left: auto; /* Pushes the line to the right */
            width: 30%; /* Adjust width as needed */
            height: 3px; /* Thickness of the line */
            background-color: #F24822; /* Line color */
            display: block;
        }

    </style>
</head>
<body>
    <!-- Tentang Kami Section -->
    <section class="review-section mt-0" id="tentang-kami" style="background-color: #161F24;">
        <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
            <div class="row text-center">
                <div class="col-md-12 d-flex flex-column justify-content-center align-items-center slideInRight">
                    <!-- Text Section -->
                    <div class="row justify-content-center mb-3 mt-5">
                        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <small class="text-bg fw-bold d-block fs-3 text-white">PT. Aneka Mulia Transport</small>
                        </div>
                    </div>
                    <h2 class="fw-bolder text-white">Tentang BusGaze</h2>
                    <p class="text-white">
                        <span style="font-weight: 400;">
                            Perusahaan penyedia Bus Penumpang antar kota yang telah berdiri sejak tahun 2016 di Makassar,
                            dan telah dipercaya lebih dari 200.000++ pelanggan. Kami selalu mengedepankan kenyamanan para pelanggan. 
                            Kami bertekad untuk selalu menjadi perusahaan transportasi terkemuka dan menjadi mitra terpercaya yang memberikan kenyamanan di setiap perjalanan anda.
                        </span>
                    </p>
                    <a class="btn btn-light" href="#fitur-kami">Lebih Lanjut</a>
                </div>
            </div>
            
            <!-- Image Section -->
            <div class="row mt-5">
                <div class="col-md-12 d-flex justify-content-center align-items-center slideInLeft">
                    <img src="{{ asset('images/Frame 13.png') }}" style="border-radius: 1.5rem;" class="img-fluid" alt="PT Aneka Mulia Transport">
                </div>
            </div>
        </div>
    </section>

    <!-- New Section for Small Bus Images with Dark Blue Background -->
    <section class="dark-blue-section">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/Frame 14.png') }}" class="img-thumbnail" alt="Sleeper Suite Class">
                        <img src="{{ asset('images/Frame 15.png') }}" class="img-thumbnail" alt="Sleeper Suite Combi Bus">
                        <img src="{{ asset('images/Frame 16.png') }}" class="img-thumbnail" alt="Premier Ultimate Class">
                    </div>
                    <p class="text-white ms-4" style="max-width: 400px;">
                        Kami selalu mengedepankan kenyamanan para pelanggan kami, dibuktikan dengan jenis armada yang terupdate dan terbaik di kelasnya yaitu Sleeper Suite Class, Sleeper Suite Combi Bus, Premier Ultimate Class, dan Executive Class.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Kami Section -->
    <section class="review-section" id="fitur-kami">
        <div class="container text-white">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="fw-bolder text-white">Nilai Terbaik Untuk Anda</h2>
                    <p>Cobalah berbagai keuntungan yang dapat anda rasakan dengan menggunakan service kami</p>
                </div>
            </div>
        </div>
    </section>
     <!-- Additional Section for Benefits with Icons -->
     <section class="dark-blue-section">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <img src="{{ asset('images/Group 29.png') }}" alt="Fasilitas Lengkap" class="img-fluid mb-2">
                    <h5 class="text-white">Fasilitas Lengkap</h5>
                    <p class="text-white">Nikmati perjalanan yang nyaman dan tenang dengan fasilitas lengkap yang kami sediakan</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/Group 30.png') }}" alt="Harga Terjangkau" class="img-fluid mb-2">
                    <h5 class="text-white">Harga Terjangkau</h5>
                    <p class="text-white">Aneka Transport menawarkan harga tiket yang terjangkau bagi semua kalangan</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/Group 31.png') }}" alt="Armada Bus Terbaik" class="img-fluid mb-2">
                    <h5 class="text-white">Armada Bus Terbaik</h5>
                    <p class="text-white">Aneka Transport menawarkan armada bus terbaru, modern dan ternyaman di kelasnya</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/Group 32.png') }}" alt="Supir & Kru Berpengalaman" class="img-fluid mb-2">
                    <h5 class="text-white">Supir & Kru Berpengalaman</h5>
                    <p class="text-white">Dengan supir yang berpengalaman dan terlatih, serta kru yang ramah dan siap membantu</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Representative Offices Section -->
<section class="offices-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white">Kantor Perwakilan Aneka</h3>
                <h6 class="text-white">Kantor Perwakilan Makassar (Khusus Rute Makassar-Mamuju-Palopo)</h6>
            </div>
        </div>
        <div class="row office-group">
            <div class="col-md-4">
                <div class="office-location">
                    <img src="images/Location.png" alt="Location Icon">
                    <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                    <div class="office-contact">
                        <img src="images/ion_call.png" alt="Phone Icon">
                        <p>Telp : +62 81244676434</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="office-location">
                    <img src="images/Location.png" alt="Location Icon">
                    <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                    <div class="office-contact">
                        <img src="images/ion_call.png" alt="Phone Icon">
                        <p>Telp : +62 81244676434</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="office-location">
                    <img src="images/Location.png" alt="Location Icon">
                    <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                    <div class="office-contact">
                        <img src="images/ion_call.png" alt="Phone Icon">
                        <p>Telp : +62 81244676434</p>
                    </div>
                </div>
            </div>
            <div class="row office-group">
                <div class="col-md-4">
                    <div class="office-location">
                        <img src="images/Location.png" alt="Location Icon">
                        <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                        <div class="office-contact">
                            <img src="images/ion_call.png" alt="Phone Icon">
                            <p>Telp : +62 81244676434</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="office-location">
                        <img src="images/Location.png" alt="Location Icon">
                        <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                        <div class="office-contact">
                            <img src="images/ion_call.png" alt="Phone Icon">
                            <p>Telp : +62 81244676434</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="office-location">
                        <img src="images/Location.png" alt="Location Icon">
                        <p>Jalan Maccini Sawah, No 43 (Depan warung HR), Maccini gusung.</p>
                        <div class="office-contact">
                            <img src="images/ion_call.png" alt="Phone Icon">
                            <p>Telp : +62 81244676434</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="col-md-12">
                <h3 class="text-white">Kantor Perwakilan Sejahtera</h3>
                <h6 class="text-white">Kantor Perwakilan Makassar</h6>
            </div>
        </div>
    </div>
    
</section>
