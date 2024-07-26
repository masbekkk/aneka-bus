<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
    <style>
        body {
            text-align: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .button-container {
            position: fixed;
            top: 10px;
            left: 10px;
        }

        .back-button {
            background-color: #ffb404;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .ticket {
            width: 290pt; /* Slightly reduced width to account for potential margins */
            height: 410pt; /* Slightly reduced height to account for potential margins */
            margin: 10px auto;
            background-color: #fff;
            font-weight: 300;
            letter-spacing: 1px;
            padding: 10px;
            box-sizing: border-box;
        }

        .ticket header {
            position: relative;
            border-bottom: 2px solid #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ticket .company-info {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .ticket .company-logo {
            width: 200px;
            height: 60px;
        }

        .ticket .company-name {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            line-height: 30px;
            font-weight: bold;
            color: #000;
            font-size: 18px;
        }

        .ticket .order-id {
            font-weight: 400;
            font-size: 12px;
            color: #000;
        }

        .ticket .airports {
            /* padding: 5px 10px 10px; */
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
            font-size: 16px;
            font-weight: bold;
        }

        .ticket .dep-arr-label,
        .ticket .time,
        .ticket .date {
            color: #000;
            font-size: 12px;
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
            font-size: 10px;
            margin-bottom: 5px;
        }

        .ticket .place-value {
            color: #000;
            font-size: 12px;
            font-weight: bold;
        }

        @media print {
            .button-container, /* Hide button container */
            .back-button, /* Hide back button */
            .fixed-header { /* Hide fixed header */
                display: none !important;
            }

            @page {
                size: 105mm 148mm; /* A6 size */
                margin: 0;
            }
        }
    </style>
    <title>Ticket</title>
</head>

<body>
    <div class="button-container">
        <a class="back-button" href="{{ route('admin-order.index')}}">Back</a>
    </div>
    @foreach ($passengers as $passenger)
        <div class="ticket">
            <header>
                <div class="company-info">
                    {!! include_svg('images/logo-tiket-new.svg') !!}
                    {{-- <img src="{{ asset('images/logo-tiket.jpg') }}"alt="Company Logo"
                        class="company-logo"> --}}
                </div>

            </header>
            <section class="airports">
                <div class="airport">
                    <div class="airport-name">{{ $reservation->ticket_bus->source->route_name }}</div>
                    <div class="dep-arr-label">Berangkat</div>
                    <div class="time">
                        {{ \Carbon\Carbon::createFromFormat('H:i:s', $reservation->ticket_bus->departure_time)->format('H:i') }}
                        WITA</div>
                    <div class="date departure_date">{{ $departure_date }}</div>
                </div>
                <div class="airport-icon">
                    <img {{-- src="./images/bus-solid.png" --}} src="{{ asset('images/bus-solid.png') }}">
                    {{-- <i class="fa fa-bus"></i> --}}
                </div>
                <div class="airport">
                    <div class="airport-name">{{ $reservation->ticket_bus->destination->route_name }}</div>
                    <div class="dep-arr-label">Sampai</div>
                    <div class="time ">
                        {{ \Carbon\Carbon::createFromFormat('H:i:s', $reservation->ticket_bus->arrive_time)->format('H:i') }}
                        WITA</div>
                    <div class="date arrive_date">{{ $arrival_date }}</div>
                </div>
            </section>
            <section class="place">
                <div class="place-block">
                    <div class="place-label">Order-ID</div>
                    <div class="place-value">{{ $reservation->no_order }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Tipe Bus</div>
                    <div class="place-value">{{ $reservation->ticket_bus->type_bus->name }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Nomor Kursi</div>
                    <div class="place-value">{{ $passenger->no_kursi }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Nama Penumpang</div>
                    <div class="place-value">{{ $passenger->name }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Jenis Kelamin</div>
                    <div class="place-value">{{ $passenger->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Nomor Telepon</div>
                    <div class="place-value">{{ $passenger->no_hp }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Lokasi Berangkat</div>
                    <div class="place-value">{{ $reservation->departure_location }}</div>
                </div>
                <div class="place-block">
                    <div class="place-label">Lokasi Turun</div>
                    <div class="place-value">{{ $reservation->drop_location }}</div>
                </div>
            </section>
        </div>
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            window.print();
        });
    </script>

    {{-- @include('ticket-bus.script-passenger-ticket'); --}}
</body>

</html>
