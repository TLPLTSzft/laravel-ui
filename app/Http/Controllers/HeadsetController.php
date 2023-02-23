<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use App\Http\Requests\StoreHeadsetRequest;
use App\Http\Requests\UpdateHeadsetRequest;

class HeadsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('headset.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeadsetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Headset $headset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Headset $headset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeadsetRequest $request, Headset $headset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headset $headset)
    {
        //
    }
}
