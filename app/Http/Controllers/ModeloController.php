<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Montadora;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = Modelo::all();

        return view('modelo.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $montadoras = Montadora::all();

        return view('modelo.create', compact('montadoras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Modelo::create([
            'montadora_id' => $request->montadora,
            'nome' => $request->nome,
            'potencia' => $request->potencia
        ]);

        return redirect()->route('modelo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
