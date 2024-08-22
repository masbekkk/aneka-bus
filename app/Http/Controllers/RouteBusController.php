<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class RouteBusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busRoute = BusRoute::all();
        return view('admin.busroute.index_route')->with('busRoute', $busRoute);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.busroute.add_route');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BusRoute::create([
            'route_name'=> $request->route_name
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
