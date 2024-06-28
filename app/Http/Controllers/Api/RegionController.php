<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Region::all();
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $region = Region::create($request->all());

        return response()->json($region, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        return Region::find( $region );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        return Region::find( $region );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $region->update( $request->all());

        return response()->json($region, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        //$region = Region::findOrFail($id);
        $region->delete();

        return response()->json(null, 204);
    }

    public function listProvinces( Region $region )
    {

        return response()->json($region->provinces, 200);
    }
}
