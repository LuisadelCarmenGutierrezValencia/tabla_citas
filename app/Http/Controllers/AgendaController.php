<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Http\Requests\AgendaRequest;

/**
 * Class AgendaController
 * @package App\Http\Controllers
 */
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::paginate();

        return view('agenda.index', compact('agendas'))
            ->with('i', (request()->input('page', 1) - 1) * $agendas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agenda = new Agenda();
        return view('agenda.create', compact('agenda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgendaRequest $request)
    {
        Agenda::create($request->validated());

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $agenda = Agenda::find($id);

        return view('agenda.show', compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agenda = Agenda::find($id);

        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgendaRequest $request, Agenda $agenda)
    {
        $agenda->update($request->validated());

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda updated successfully');
    }

    public function destroy($id)
    {
        Agenda::find($id)->delete();

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda deleted successfully');
    }
}
