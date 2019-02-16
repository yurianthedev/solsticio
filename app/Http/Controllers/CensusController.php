<?php

namespace App\Http\Controllers;

use App\Census;
use Illuminate\Http\Request;

class CensusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $censuses = Census::orderBy('id', 'DESC')->where('status', 'PENDING')->paginate(25);
        return $censuses;
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
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function show(Census $census)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Census $census)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Census  $census
     * @return \Illuminate\Http\Response
     */
    public function destroy(Census $census)
    {
        //
    }
}
