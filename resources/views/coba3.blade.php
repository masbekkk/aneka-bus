<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bus-layout {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            padding: 20px;
            background-color: #f8f8f8;
        }

        .seat {
            position: relative;
            width: 60px;
            height: 100px;
            border: 2px solid #d6b1b1;
            border-radius: 10px;
            background-color: #f8e9ed;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            color: #a85b66;
            text-align: center;
        }

        .seat::before, .seat::after {
            content: "";
            position: absolute;
            width: 40px;
            height: 12px;
            background-color: #f8e9ed;
            border: 2px solid #d6b1b1;
            border-radius: 5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .seat::before {
            top: -8px;
        }

        .seat::after {
            bottom: -8px;
        }

        .seat-number {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
    <title>Bus Sleeper Seat Layout</title>
</head>
<body>
    <div class="container">
        <div class="bus-layout">
            <div class="seat"><div class="seat-number">1</div></div>
            <div class="seat"><div class="seat-number">2</div></div>
            <div class="seat"><div class="seat-number">3</div></div>
            <div class="seat"><div class="seat-number">4</div></div>
            <div class="seat"><div class="seat-number">5</div></div>
            <div class="seat"><div class="seat-number">6</div></div>
            <div class="seat"><div class="seat-number">7</div></div>
            <div class="seat"><div class="seat-number">8</div></div>
            <div class="seat"><div class="seat-number">9</div></div>
            <div class="seat"><div class="seat-number">10</div></div>
            <div class="seat"><div class="seat-number">11</div></div>
            <div class="seat"><div class="seat-number">12</div></div>
            <div class="seat"><div class="seat-number">13</div></div>
            <div class="seat"><div class="seat-number">14</div></div>
            <div class="seat"><div class="seat-number">15</div></div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
