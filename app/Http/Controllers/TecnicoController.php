<?php
namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function index()
    {
        $tecnicos = Tecnico::all();
        return view('tecnicos.index', compact('tecnicos'));
    }

    public function create()
    {
        return view('tecnicos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'especialidad' => 'nullable',
        ]);

        Tecnico::create($validated);

        return redirect()->route('tecnicos.index');
    }

    public function show(Tecnico $tecnico)
    {
        return view('tecnicos.show', compact('tecnico'));
    }

    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.edit', compact('tecnico'));
    }

    public function update(Request $request, Tecnico $tecnico)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'especialidad' => 'nullable',
        ]);

        $tecnico->update($validated);

        return redirect()->route('tecnicos.index');
    }

    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();
        return redirect()->route('tecnicos.index');
    }
}
