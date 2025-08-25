<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;

class NegocioController extends Controller
{
    public function index()
    {
        $negocios = Negocio::all();
        return view('negocio.index', compact('negocios'));
    }

    public function create()
    {
        return view('negocio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'negocio' => 'required',
        ]);
        Negocio::create($request->all());
        return redirect()->route('negocio.index')->with('success', 'Negocio creado correctamente');
    }

    public function show(Negocio $negocio)
    {
        return view('negocio.show', compact('negocio'));
    }

    public function edit(Negocio $negocio)
    {
        return view('negocio.edit', compact('negocio'));
    }

    public function update(Request $request, Negocio $negocio)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'negocio' => 'required',
        ]);
        $negocio->update($request->all());
        return redirect()->route('negocio.index')->with('success', 'Negocio actualizado correctamente');
    }

    public function destroy(Negocio $negocio)
    {
        $negocio->delete();
        return redirect()->route('negocio.index')->with('success', 'Negocio eliminado correctamente');
    }
}
