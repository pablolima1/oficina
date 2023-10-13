<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Modelo;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculo.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $modelos = Modelo::all();

        return view('veiculo.create', compact('clientes', 'modelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Veiculo::create([
            'cliente_id' => $request->cliente,
            'modelo_id' => $request->modelo,
            'placa' => $request->placa,
            'ano_fabricacao' => $request->ano_fabricacao,
            'ano_modelo' => $request->ano_modelo,
            'cor' => $request->cor
        ]);

        return redirect()->route('veiculo.index');
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
