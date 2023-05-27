<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Http\Requests\StoreEntrada;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entradas = Entrada::orderBy('id','desc')->paginate();

        return view('entradas.index',compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entradas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrada $request)
    {
        $entrada = Entrada::create($request->all());

        return redirect()->route('entradas.show',$entrada);
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        return view('entradas.show',compact('entrada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrada $entrada)
    {
        return view('entradas.edit',compact('entrada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEntrada $request, Entrada $entrada)
    {
        $entrada->update($request->all());

        return redirect()->route('entradas.show',$entrada);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrada $entrada)
    {
        $entrada->delete();

        return redirect()->route('entradas.index');
    }
}
