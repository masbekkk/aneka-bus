<?php

namespace App\Http\Controllers;

use App\Models\TypeBus;
use Illuminate\Http\Request;

class TypeBusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeBus = TypeBus::all();
        return view('admin.ticket.all_type_bus')->with('typebus', $typeBus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ticket.add_type_bus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $seats = range(1, (int)$request->seats);
    $seatsFormatted = implode(',', $seats);

    $womenSeats = range(1, (int)$request->women_seats);
    $womenSeatsFormatted = implode(',', $womenSeats);

    $lastWomanSeats= end($womenSeats);

    $menSeats = range($lastWomanSeats+1, (int)$request->men_seats + $lastWomanSeats );
    $menSeatsFormatted = implode(',', $menSeats);

        TypeBus::create([
            'name' => $request->name,
            'seats' => $seatsFormatted,
            'women_seats' => $womenSeatsFormatted,
            'men_seats' => $menSeatsFormatted
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeBus $typeBus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeBus $typeBus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeBus $typeBus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeBus $typeBus)
    {
        //
    }
}
