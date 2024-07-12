 <script>
        function formatDate(date) {
            return new Intl.DateTimeFormat('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            }).format(date);
        }
        let departure_date = new Date('{{ $ticket->departure_date }}')
        let arrive_date = new Date('{{ $arrive_date }}');
        $('.departure_date').text(formatDate(departure_date))
        $('.arrive_date').text(formatDate(arrive_date))
        const seatPrice = '{{ $ticket->price }}';
        let selectedSeats = [];

        $(document).ready(function() {
            let seatNumber = 1;
            const seats = $(".seatCont .seat");
            seats.each(function() {
                $(this).data("seatNumber", seatNumber++);
            });

            $(".seatCont .seat:not(.occupied)").on("click", function() {
                const seat = $(this);
                if (seat.hasClass("selected")) {
                    seat.removeClass("selected");
                    selectedSeats.splice(selectedSeats.indexOf(seat), 1);
                } else if (!seat.hasClass("occupied")) {
                    seat.addClass("selected");
                    selectedSeats.push(seat);
                }

                const cost = seatPrice * selectedSeats.length;
                $("#totalPrice").text(`Rp ${cost.toLocaleString('id-ID')}`);
                $("#numberOfSeat").text(selectedSeats.length);
                updateSeatHolder();
            });

            function updateSeatHolder() {
                const selectedSeatsHolder = $("#selectedSeatsHolder");
                selectedSeatsHolder.empty();

                if (selectedSeats.length > 0) {
                    selectedSeats.forEach(seat => {
                        const seatHolder = $("<div>").addClass("selectedSeats").text(seat.data(
                            "seatNumber"));
                        selectedSeatsHolder.append(seatHolder);
                    });
                } else {
                    const span = $("<span class='noSelected text-dark fw-bold fst-italic'>").text("BELUM ADA KURSI YANG DIPILIH");
                    selectedSeatsHolder.append(span);
                }
            }

            function booked() {
                $('#selected_seat').val(selectedSeats.map(seat => seat.data("seatNumber")));
                // alert(selectedSeats.map(seat => seat.data("seatNumber")).join(", "));
            }

            $("#form_submit_seat").on("submit", function(e) {
                e.preventDefault();
                if (selectedSeats.length == 0) {
                    alert("Kamu Belum memilih Kursi!");
                } else {
                    const selectedSeatNumbers = selectedSeats.map(seat => seat.data("seatNumber"));
                    $('#selected_seat').val(selectedSeatNumbers);
                    // alert($('#selected_seat').val())
                    this.submit();
                }
            });

            $("#cancelBtn").on("click", function() {
                selectedSeats.forEach(seat => {
                    seat.removeClass("selected");
                });
                selectedSeats = [];
                $("#numberOfSeat").text(0);
                $("#totalPrice").text(`0`);
                updateSeatHolder();
            });
        });
    </script>