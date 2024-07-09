<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Seat Selector</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        /* styles.css */
        .wheel {
            stroke: #929292;
            stroke-width: 2px;
            fill: #fff;
        }

        .front {
            stroke: #bac8cc;
            stroke-width: 0.873px;
            fill: #f3f7f8;
        }

        .s-body {
            fill: #f3f7f8;
        }

        .s-side {
            fill: #f3f7f8;
        }

        .s-seat {
            fill: #fff;
            stroke: #c6c6c6;
            cursor: pointer;
        }

        .s-seat-n {
            fill: #000000;
            font-size: 1rem;
            text-anchor: middle;
        }

        .empty-seat {
            fill: #f3f7f8;
            stroke: #c6c6c6;
            cursor: pointer;
        }

        .selected-female {
            fill: #ead8de;
            stroke: #bd8598;
            cursor: pointer;
        }

        .sold-female {
            fill: #ead8de;
            stroke: #bd8598;
            cursor: not-allowed;
        }

        .reserved-female {
            fill: #ead8de;
            stroke: #bd8598;
            cursor: not-allowed;
        }

        .selected-male {
            fill: #c7e2fb;
            stroke: #50a4f3;
            cursor: pointer;
        }

        .reserved-male {
            fill: #c7e2fb;
            stroke: #50a4f3;
            cursor: not-allowed;
        }

        .sold-male {
            fill: #c7e2fb;
            stroke: #50a4f3;
            cursor: not-allowed;
        }

        .being-sold {
            fill: #c7e2fb;
            stroke: #50a4f3;
            cursor: pointer;
        }

        .unavailable {
            fill: #c7e2fb;
            stroke: #50a4f3;
            cursor: not-allowed;
        }

        .select-gender .modal-body {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .icon-man::before {
            content: '\f183';
            font-family: FontAwesome;
        }

        .icon-woman::before {
            content: '\f182';
            font-family: FontAwesome;
        }
    </style>
</head>

<body>
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
            baseProfile="full" viewBox="0, 0, 940, 294" class="bus-layout">
            <symbol id="front">
                <use xlink:href="#front-upper" x="0" y="0" />
                <path
                    d="m69.9 249h-1.7c0.8-12 10.1-21 21.3-21h3.5c-1.8 12-11.4 21-23.1 21zm-23.4-25c0-11 7.2-20 17.1-23v47c-9.9-3-17.1-12-17.1-24zm28.3 0c0 2-1.4 4-3.1 4s-3.1-2-3.1-4c0-1 1.4-3 3.1-3s3.1 2 3.1 3zm18.1-4h-3.4c-11.1 0-20.2-9-21.2-20h1.6c11.5 0 21 9 23 20zm-23-24c-15.4 0-27.8 12-27.8 28s12.4 29 27.8 29 27.9-13 27.9-29-12.5-28-27.9-28z"
                    class="wheel" stroke-width="2" fill="#fff" />
            </symbol>
            <symbol id="front-upper">
                <path
                    d="m151 0.385s-87.1 4.48-112 10.3c-25.5 5.9-35.3 17.8-36.1 34.4-0.89 16.7-2.51 94.9-2.51 94.9l2.48 105s-2.61 18 17.7 27c0.8 0 15.2 5 16 6 21.6 8 64.4 9 64.4 9l66 3h41v-290c0 0.385-38 0.385-38 0.385h-19z"
                    class="front" stroke="#BAC8CC" stroke-width=".873" fill="#F3F7F8" />
            </symbol>
            <symbol id="back">
                <g class="back" stroke="#BAC8CC" stroke-width="1.2" fill="#F3F7F8">
                    <path
                        d="m2.52 0.268s8.08 0.186 10.4 0.882c2.3 0.7 7.3 1.98 8.1 10.2 1.3 12.9 1.2 11 1.5 14.5 0.9 11.4 5.7 108 5.7 108s-5.5 121-10.4 138c-1.9 7-2.3 12-6 15-1.2 1-2.22 1-6.72 2h-7.5l4.94-289z"
                        transform="translate(12.9 145) rotate(-1) translate(-12.9 -145)" />
                </g>
            </symbol>
            <symbol id="side">
                <path d="M0 0 H60 0" />
            </symbol>
            <symbol id="arrow">
                <g transform="translate(-23078.387 -2762.999)">
                    <g transform="translate(23078.387 2762.999)">
                        <path d="M488.829,155.4l17.162,5.259L488.829,166.2v-2.71H482v-5.364h6.829Z"
                            transform="translate(-459.709 -155.4)" />
                        <path d="M327.7,331.5h4.968v5.142H327.7Z" transform="translate(-312.696 -328.733)" />
                        <path d="M218.1,331.5h2.956v5.142H218.1Z" transform="translate(-208.272 -328.733)" />
                        <path d="M114,331.5h2.956v5.142H114Z" transform="translate(-109.088 -328.733)" />
                        <path d="M10,331.5h2.956v5.142H10Z" transform="translate(-10 -328.733)" />
                    </g>
                    <g transform="translate(23090.387 2776.203)">
                        <path d="M499.162,155.4,482,160.659l17.162,5.538v-2.71h6.829v-5.364h-6.829Z"
                            transform="translate(-482 -155.4)" />
                        <path d="M332.668,331.5H327.7v5.142h4.968Z" transform="translate(-301.391 -328.733)" />
                        <path d="M221.056,331.5H218.1v5.142h2.956Z" transform="translate(-184.603 -328.733)" />
                        <path d="M116.956,331.5H114v5.142h2.956Z" transform="translate(-75.587 -328.733)" />
                        <path d="M12.956,331.5H10v5.142h2.956Z" transform="translate(33.325 -328.733)" />
                    </g>
                </g>
            </symbol>
            <symbol id="seat">
                <rect x="1" y="4" width="45" height="40" rx="10" ry="10" />
                <rect x="15" y="2" width="25" height="7" rx="5" ry="5" />
                <rect x="15" y="39" width="25" height="7" rx="5" ry="5" />
                <rect x="36" y="1" width="12" height="46" rx="6" ry="6" />
            </symbol>
            <use class="s-front" xlink:href="#front" x="0" y="0" />
            <use class="s-back" xlink:href="#back" x="910" y="0" />
            <rect class="s-body" x="205" y="2" width="708" height="287" fill="#F3F7F8" />
            <use xlink:href="#side" class="s-side" x="140" y="0" />
            <!-- Add seats dynamically with JavaScript -->
        </svg>

        <!-- Modal -->
        <div class="modal fade" id="genderModal" tabindex="-1" role="dialog" aria-labelledby="genderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="genderModalLabel">Select Gender for Seat Number <span
                                id="selectedSeat"></span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body select-gender">
                        <button class="btn btn-primary" onclick="selectSeat('male')">
                            <i class="icon-man"></i> Male
                        </button>
                        <button class="btn btn-primary" onclick="selectSeat('female')">
                            <i class="icon-woman"></i> Female
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // script.js
        const placeHolderBusSeats = [{
                KoltukStr: "1",
                Durum: "0",
                KoltukFiyatiInternet: "50"
            },
            {
                KoltukStr: "2",
                Durum: "0",
                KoltukFiyatiInternet: "50"
            },
            // Add more seats as necessary
        ];

        let userSelectedSeats = [];
        let selectedSeatNumber = '';
        let selectedBusId = '123'; // Example bus ID

        document.addEventListener('DOMContentLoaded', function() {
            const svg = document.querySelector('.bus-layout');

            placeHolderBusSeats.forEach((seat, index) => {
                const rowCount = 5; // Number of rows
                const columnWidth = 53 + 5; // Seat width + spacing
                const rowHeight = 50; // Seat height
                const startX = 120; // Starting x coordinate
                const startY = 20; // Starting y coordinate
                const columnIndex = Math.floor(index / rowCount); // Column index of the seat
                const rowIndex = rowCount - 1 - (index % rowCount); // Row index of the seat
                const x = startX + columnIndex * columnWidth;
                const y = startY + rowIndex * rowHeight;
                const seatStatus = seat.Durum;
                const seatNumber = seat.KoltukStr;

                let seatClass = '';
                switch (seatStatus) {
                    case '0':
                        seatClass = 'empty-seat';
                        break;
                    case '1':
                        seatClass = 'sold-female';
                        break;
                    case '2':
                        seatClass = 'reserved-female';
                        break;
                    case '3':
                        seatClass = 'sold-male';
                        break;
                    case '4':
                        seatClass = 'reserved-male';
                        break;
                    case '5':
                        seatClass = 'being-sold';
                        break;
                    case '6':
                        seatClass = 'unavailable';
                        break;
                    default:
                        seatClass = '';
                }

                const seatGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                seatGroup.setAttribute('class', `${seatClass}`);
                seatGroup.setAttribute('data-seat-number', seatNumber);

                const rect = document.createElementNS('http://www.w3.org/2000/svg', 'rect');
                rect.setAttribute('x', x);
                rect.setAttribute('y', y);
                rect.setAttribute('width', 53);
                rect.setAttribute('height', 49);
                rect.setAttribute('fill', '#fff');
                rect.setAttribute('stroke', '#c6c6c6');
                rect.setAttribute('class', 's-seat');
                rect.setAttribute('cursor', 'pointer');

                const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
                text.setAttribute('x', x + 20);
                text.setAttribute('y', y + 30);
                text.setAttribute('class', 's-seat-n');
                text.textContent = seatNumber;

                seatGroup.appendChild(rect);
                seatGroup.appendChild(text);

                seatGroup.addEventListener('click', () => {
                    if (seatStatus === '0') {
                        selectedSeatNumber = seatNumber;
                        document.getElementById('selectedSeat').textContent = seatNumber;
                        $('#genderModal').modal('show');
                    }
                });

                svg.appendChild(seatGroup);
            });
        });

        function selectSeat(gender) {
            const selectedSeat = placeHolderBusSeats.find(seat => seat.KoltukStr === selectedSeatNumber);
            if (userSelectedSeats.length < 4) {
                userSelectedSeats.push({
                    busId: selectedBusId,
                    seatNumber: selectedSeatNumber,
                    gender: gender,
                    price: selectedSeat.KoltukFiyatiInternet
                });
                alert(`Seat ${selectedSeatNumber} selected for ${gender}`);
            } else {
                alert('You can select up to 4 seats.');
            }
            $('#genderModal').modal('hide');
        }
    </script>
</body>

</html>
