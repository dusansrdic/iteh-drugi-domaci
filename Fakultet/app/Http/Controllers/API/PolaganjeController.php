<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Polaganje;
use Illuminate\Http\Request;
use App\Http\Resources\PolaganjeResource;

class PolaganjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $polaganja = Polaganje::all();
        return PolaganjeResource::collection($polaganja); 
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
     * @param  \App\Models\Polaganje  $polaganje
     * @return \Illuminate\Http\Response
     */
    public function show(Polaganje $polaganje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polaganje  $polaganje
     * @return \Illuminate\Http\Response
     */
    public function edit(Polaganje $polaganje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polaganje  $polaganje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polaganje $polaganje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polaganje  $polaganje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polaganje $polaganje)
    {
        //
    }
}
