<?php

namespace App\Http\Controllers;

use App\Models\RentCar;
use DB;
use Illuminate\Http\Request;

class RentCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent_car = DB::select("select orders.*, rent_cars.* from orders join tours ON orders.product_id = rent_cars.id ORDER BY orders.updated_at ASC");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentCar  $rentCar
     * @return \Illuminate\Http\Response
     */
    public function show(RentCar $rentCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentCar  $rentCar
     * @return \Illuminate\Http\Response
     */
    public function edit(RentCar $rentCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentCar  $rentCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentCar $rentCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentCar  $rentCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentCar $rentCar)
    {
        //
    }
}
