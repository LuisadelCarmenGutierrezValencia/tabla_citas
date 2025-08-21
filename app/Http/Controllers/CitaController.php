<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Http\Requests\CitaRequest;

/**
 * Class CitaController
 * @package App\Http\Controllers
 */
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::paginate();

        return view('cita.index', compact('citas'))
            ->with('i', (request()->input('page', 1) - 1) * $citas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cita = new Cita();
        return view('cita.create', compact('cita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CitaRequest $request)
    {
        Cita::create($request->validated());

        return redirect()->route('citas.index')
            ->with('success', 'Cita creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cita = Cita::findOrFail($id);
        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CitaRequest $request, $id)
    {
        $cita = Cita::findOrFail($id);
        $cita->update($request->validated());

        return redirect()->route('citas.index')
            ->with('success', 'Cita updated successfully');
    }

    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();
        return redirect()->route('citas.index')
            ->with('success', 'Cita deleted successfully');
    }
}
