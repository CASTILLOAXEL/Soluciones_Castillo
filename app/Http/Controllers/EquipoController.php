<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Marca;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with('marca')->get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('equipos.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'marca_id' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
        ]);

        Equipo::create($validated);

        return redirect()->route('equipos.index');
    }

    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo)
    {
        $marcas = Marca::all();
        return view('equipos.edit', compact('equipo', 'marcas'));
    }

    public function update(Request $request, Equipo $equipo)
    {
        $validated = $request->validate([
            'marca_id' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
        ]);

        $equipo->update($validated);

        return redirect()->route('equipos.index');
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}
