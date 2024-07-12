  <ul class="list-unstyled d-flex justify-content-center">
      <li>
          <div class="d-flex flex-column">
              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 
    {{ in_array(1, $men_seats) ? 'occupied men' : (in_array(1, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="1">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">1</text>
                  </div>

                  <div class="seat mx-1 my-3 
    {{ in_array(2, $men_seats) ? 'occupied men' : (in_array(2, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="2">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">2</text>
                  </div>
                  <div class="seat mx-1 my-3 
    {{ in_array(3, $men_seats) ? 'occupied men' : (in_array(3, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="3">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">3</text>
                  </div>

              </div>
              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 
    {{ in_array(4, $men_seats) ? 'occupied men' : (in_array(4, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="4">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">4</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(5, $men_seats) ? 'occupied men' : (in_array(5, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="5">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">5</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(6, $men_seats) ? 'occupied men' : (in_array(6, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="6">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">6</text>
                  </div>

              </div>
              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 
    {{ in_array(7, $men_seats) ? 'occupied men' : (in_array(7, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="7">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">7</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(8, $men_seats) ? 'occupied men' : (in_array(8, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="8">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">8</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(9, $men_seats) ? 'occupied men' : (in_array(9, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="9">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">9</text>
                  </div>

              </div>

              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 
    {{ in_array(10, $men_seats) ? 'occupied men' : (in_array(10, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="10">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">10</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(11, $men_seats) ? 'occupied men' : (in_array(11, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="11">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">11</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(12, $men_seats) ? 'occupied men' : (in_array(12, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="12">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">12</text>
                  </div>

              </div>

              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 
    {{ in_array(13, $men_seats) ? 'occupied men' : (in_array(13, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="13">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">13</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(14, $men_seats) ? 'occupied men' : (in_array(14, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="14">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">14</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(15, $men_seats) ? 'occupied men' : (in_array(15, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="15">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">15</text>
                  </div>

              </div>

              <div class="d-flex flex-row seat-row">
                  <div class="seat mx-1 my-3 occupied tangga">
                      {!! include_svg('images/seat/tangga.svg') !!}
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(16, $men_seats) ? 'occupied men' : (in_array(16, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="16">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">16</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(17, $men_seats) ? 'occupied men' : (in_array(17, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="17">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">17</text>
                  </div>

              </div>

              <div class="d-flex flex-row justify-content-evenly">
                  <div class="seat mx-1 my-3 no-18
    {{ in_array(18, $men_seats) ? 'occupied men' : (in_array(18, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="18">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">18</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(19, $men_seats) ? 'occupied men' : (in_array(19, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="19">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">19</text>
                  </div>

                  <div class="seat mx-1 my-3 
{{ in_array(20, $men_seats) ? 'occupied men' : (in_array(20, $women_seats) ? 'occupied women' : '') }}"
                      data-seat-number="20">
                      {!! include_svg('images/seat/kursi-1.svg') !!}
                      <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                          font-size="14">20</text>
                  </div>

              </div>

          </div>
      </li>
  </ul>
