<?php

namespace App\Http\Controllers;

use App\Models\Agriculteur;
use App\Http\Requests\StoreAgriculteurRequest;
use App\Http\Requests\UpdateAgriculteurRequest;

class AgriculteurController extends Controller
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
     * @param  \App\Http\Requests\StoreAgriculteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgriculteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agriculteur  $agriculteur
     * @return \Illuminate\Http\Response
     */
    public function show(Agriculteur $agriculteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agriculteur  $agriculteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Agriculteur $agriculteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgriculteurRequest  $request
     * @param  \App\Models\Agriculteur  $agriculteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgriculteurRequest $request, Agriculteur $agriculteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agriculteur  $agriculteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agriculteur $agriculteur)
    {
        //
    }
}
