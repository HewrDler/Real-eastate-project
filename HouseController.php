<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorehouseRequest;
use App\Http\Requests\UpdatehouseRequest;
use App\Models\house;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    function store(house $request)
    {
      $house=new house;
      $house->City=$request->City;
      $house->Area=$request->Area;
      $house->Purpose=$request->Purpose;
      $house->Property_Type=$request->Property_Type;
      $house->Price=$request->Price;
      $house->Floor=$request->Floor;
      $house->Bedroom=$request->Bedroom;
      $house->Image=$request->Image;
      $house->Description=$request->Description;
      $house->PostedBy=$request->PostedBy;
      $house->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function show(house $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(house $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehouseRequest  $request
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehouseRequest $request, house $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\house  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(house $house)
    {
        //
    }
    
}
