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
         $(".seatCont .seat:not(.occupied)").on("click", function() {
             const seat = $(this);
             const seatNumber = seat.data("seat-number");

             if (seat.hasClass("selected")) {
                 seat.removeClass("selected");
                 selectedSeats = selectedSeats.filter(number => number !== seatNumber);
             } else if (!seat.hasClass("occupied")) {
                 seat.addClass("selected");
                 selectedSeats.push(seatNumber);
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
                 selectedSeats.forEach(seatNumber => {
                     const seatHolder = $("<div>").addClass("selectedSeats").text(seatNumber);
                     selectedSeatsHolder.append(seatHolder);
                 });
             } else {
                 const span = $("<span class='noSelected text-dark fw-bold fst-italic'>").text(
                     "BELUM ADA KURSI YANG DIPILIH");
                 selectedSeatsHolder.append(span);
             }
         }

         function booked() {
             $('#selected_seat').val(selectedSeats.join(", "));
         }

         $("#form_submit_seat").on("submit", function(e) {
             e.preventDefault();
             if (selectedSeats.length == 0) {
                 alert("Kamu Belum memilih Kursi!");
             } else {
                 $('#selected_seat').val(selectedSeats.join(", "));
                 this.submit();
             }
         });

         $("#cancelBtn").on("click", function() {
             $(".seatCont .seat").removeClass("selected");
             selectedSeats = [];
             $("#numberOfSeat").text(0);
             $("#totalPrice").text(`0`);
             updateSeatHolder();
         });
     });
 </script>
