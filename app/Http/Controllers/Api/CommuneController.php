<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Commune::all();
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

        $commune = Commune::create($request->all());

        return response()->json($commune, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commune $commune)
    {
        return Commune::find( $commune );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commune $commune)
    {
        return Commune::find( $commune );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commune $commune)
    {
        $commune->update( $request->all());

        return response()->json($commune, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commune $commune)
    {
        $commune->delete();

        return response()->json(null, 204);
    }

    public function listStreets( Commune $commune )
    {

        return response()->json($commune->streets, 200);
    }
}
