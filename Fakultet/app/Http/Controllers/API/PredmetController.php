<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Predmet;
use Illuminate\Http\Request;
use App\Http\Resources\PredmetResource;
use Illuminate\Support\Facades\Validator;

class PredmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'sajt_predmeta' => 'required|string',
            'email' => 'required|email',
            'espb' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska!', $validator->errors()]);
        }

        $predmet = Predmet::create([
            'naziv' => $request->naziv,
            'sajt_predmeta' => $request->sajt_predmeta,
            'email' => $request->email,
            'espb' => $request->espb,
        ]);

        return response()->json(['Dodat novi predmet!.', new PredmetResource($predmet)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function show(Predmet $predmet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Predmet $predmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predmet $predmet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predmet $predmet)
    {
        //
    }
}
