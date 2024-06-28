<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Province::all();
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

        $province = Province::create($request->all());

        return response()->json($province, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        return Province::find( $province );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        return Province::find( $province );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        $province->update( $request->all());

        return response()->json($province, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();

        return response()->json(null, 204);
    }

    public function listCommunes( Province $province )
    {

        return response()->json($province->communes, 200);
    }
}
