<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Street::all();
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

        $street = Street::create($request->all());

        return response()->json($street, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Street $street)
    {
        return Street::find( $street );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Street $street)
    {
        return Street::find( $street );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Street $street)
    {
        $street->update( $request->all());

        return response()->json($street, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Street $street)
    {
        $street->delete();

        return response()->json(null, 204);
    }


    public function search(Request $request)
    {
        // Validar el parámetro de consulta 'name'
        $request->validate([
            'name' => 'required|string'
        ]);

        $searchTerm = strtolower($request->name);

        // Buscar las calles por su nombre (insensible a mayúsculas y minúsculas)
        $streets = Street::whereRaw('LOWER(name) LIKE ?', ["%{$searchTerm}%"])
            ->with(['commune.province.region']) // Cargar relaciones
            ->get();



        if ($streets->isEmpty()) {
            return response()->json(['message' => 'No se encotraron coincidencias'], 404);
        }

        // Preparar los datos para la respuesta
        $data = $streets->map(function ($street) {
            return [
                'id' => $street->id,
                'street_name' => $street->name,
                'commune_name' => $street->commune->name,
                'province_name' => $street->commune->province->name,
                'region_name' => $street->commune->province->region->name,
            ];
        });

        // Retornar los datos como respuesta JSON
        return response()->json($data);

    }


}
