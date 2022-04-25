<?php

namespace App\Http\Controllers;

use App\Models\Parcelle;
use App\Http\Requests\StoreParcelleRequest;
use App\Http\Requests\UpdateParcelleRequest;

class ParcelleController extends Controller
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
     * @param  \App\Http\Requests\StoreParcelleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParcelleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parcelle  $parcelle
     * @return \Illuminate\Http\Response
     */
    public function show(Parcelle $parcelle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcelle  $parcelle
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcelle $parcelle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParcelleRequest  $request
     * @param  \App\Models\Parcelle  $parcelle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParcelleRequest $request, Parcelle $parcelle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcelle  $parcelle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcelle $parcelle)
    {
        //
    }
}
