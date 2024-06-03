<?php
namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ]);

        Marca::create($validated);

        return redirect()->route('marcas.index');
    }

    public function show(Marca $marca)
    {
        return view('marcas.show', compact('marca'));
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ]);

        $marca->update($validated);

        return redirect()->route('marcas.index');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marcas.index');
    }
}

