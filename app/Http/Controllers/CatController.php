<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Http\Requests\StoreCatRequest;
use App\Http\Requests\UpdateCatRequest;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cat.list');
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
    public function store(StoreCatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatRequest $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        //
    }
}
