<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        body {
            text-align: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .ticket {
            display: inline-block;
            width: 297pt; 
            height: 419pt;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            color: #000;
            font-weight: 300;
            letter-spacing: 1px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1px solid #000;
            padding: 10px;
        }

        .ticket header {
            position: relative;
            /* height: 70px; */
            padding: 10px;
            border-bottom: 2px solid #000;
        }

        .ticket .company-name {
            line-height: 30px;
            text-align: center;
            font-weight: bold;
            color: #000;
            font-size: 18px;
        }

        .ticket .order-id {
            /* position: absolute; */
            right: 15px;
            bottom: 10px;
            font-weight: 400;
            /* font-size: 12px; */
            color: #000;
        }

        .ticket .airports {
            padding: 5px 10px 10px;
            text-align: center;
            position: relative;
            border-bottom: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .ticket .airport {
            position: relative;
            margin: 10px;
            text-align: center;
            display: inline-block;
            flex: 1;
        }

        .ticket .airport-name {
            color: #000;
            font-size: 20px;
            font-weight: bold;
        }

        .ticket .dep-arr-label,
        .ticket .time {
            color: #000;
            font-size: 15px;
            font-weight: 500;
        }

        .ticket .airport-icon {
            flex: 0;
            font-family: FontAwesome;
            color: #000;
            font-size: 30px;
        }

        .ticket .place {
            padding: 10px;
            text-align: left;
        }

        .ticket .place-block {
            display: block;
            margin: 10px 0;
        }

        .ticket .place-label {
            color: #000;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .ticket .place-value {
            color: #000;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <title>Ticket</title>
</head>

<body>
    <div class="ticket">
        <header>
            <div class="company-name">AT03 - Sleeper Suite Combi Bus</div>
            <div class="order-id">Order ID: 1234567890</div>
        </header>
        <section class="airports">
            <div class="airport">
                <div class="airport-name">Makassar</div>
                <div class="dep-arr-label">Berangkat</div>
                <div class="time">7:45</div>
            </div>
            <div class="airport-icon">
                <i class="fa fa-bus"></i>
            </div>
            <div class="airport">
                <div class="airport-name">Mamuju</div>
                <div class="dep-arr-label">Sampai</div>
                <div class="time">9:15</div>
            </div>
        </section>
        <section class="place">
            <div class="place-block">
                <div class="place-label">Nomor Kursi</div>
                <div class="place-value">Sleeper-2</div>
            </div>
            <div class="place-block">
                <div class="place-label">Nama Penumpang</div>
                <div class="place-value">John Doe</div>
            </div>
            <div class="place-block">
                <div class="place-label">Jenis Kelamin</div>
                <div class="place-value">Laki-laki</div>
            </div>
            <div class="place-block">
                <div class="place-label">Nomor Telepon</div>
                <div class="place-value">08123456789</div>
            </div>
            <div class="place-block">
                <div class="place-label">Lokasi Berangkat</div>
                <div class="place-value">Jalan A, No. 123, Makassar</div>
            </div>
            <div class="place-block">
                <div class="place-label">Lokasi Turun</div>
                <div class="place-value">Jalan B, No. 456, Mamuju</div>
            </div>
        </section>
    </div>
</body>

</html>
