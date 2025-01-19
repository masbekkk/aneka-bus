<ul class="list-unstyled d-flex justify-content-center">
    <li>
        <div class="d-flex flex-column">
            @for ($i = 1; $i <= count($seats); $i++)
                @if ($i % 3 == 1)
                    <div class="d-flex flex-row seat-row">
                @endif

                <div class="seat mx-1 my-3
                {{ in_array($i, $men_seats) ? 'occupied men' : (in_array($i, $women_seats) ? 'occupied women' : '') }}"
                    data-seat-number="{{ $i }}">
                    {!! include_svg('images/seat/kursi-1.svg') !!}
                    <text class="text-dark fw-bolder" x="20" y="45" text-anchor="middle" fill="black"
                        font-size="14">{{ $i }}</text>
                </div>

                @if ($i % 3 == 0 || $i == count($seats))
                    </div>
                @endif
            @endfor

            {{-- <div class="d-flex flex-row justify-content-evenly">
                <div class="seat mx-1 my-3 occupied tangga">
                    {!! include_svg('images/seat/tangga.svg') !!}
                </div>
            </div> --}}
        </div>
    </li>
</ul>
