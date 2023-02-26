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
        $headsets = Headset::all();
        return view('headsets.index', ['headsets' => $headsets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('headsets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeadsetRequest $request)
    {
        $headset = new Headset();
        $headset->fill($request->all());
        $headset->save();
        return redirect()->route('headsets.show', $headset->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Headset $headset)
    {
        return view('headsets.show', ['headset' => $headset]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Headset $headset)
    {
        return view('headsets.edit', ['headset' => $headset]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeadsetRequest $request, Headset $headset)
    {
        $headset->fill($request->all());
        $headset->save();
        return redirect()->route('headsets.show', $headset->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headset $headset)
    {
        $headset->delete();
        return redirect()->route('headsets.index');
    }
}
