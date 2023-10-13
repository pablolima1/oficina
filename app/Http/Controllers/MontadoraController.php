<?php

namespace App\Http\Controllers;

use App\Models\Montadora;
use Illuminate\Http\Request;

class MontadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $montadoras = Montadora::orderBy('nome')->get();

        return view('montadora.index', compact('montadoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('montadora.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Montadora::create([
            'nome' => $request->nome
        ]);

        return redirect()->route('montadora.index');
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
