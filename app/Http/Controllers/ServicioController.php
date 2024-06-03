<?php
namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Tecnico;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::with(['cliente', 'equipo', 'tecnico'])->get();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.create', compact('clientes', 'equipos', 'tecnicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'equipo_id' => 'required|exists:equipos,id',
            'tecnico_id' => 'required|exists:tecnicos,id',
            'fecha_recepcion' => 'required|date',
            'problema' => 'required|string',
            'estado' => 'required|string',
        ]);

        Servicio::create([
            'cliente_id' => $request->cliente_id,
            'equipo_id' => $request->equipo_id,
            'tecnico_id' => $request->tecnico_id,
            'fecha_recepcion' => $request->fecha_recepcion,
            'problema' => $request->problema,
            'estado' => $request->estado,
        ]);

        return redirect()->route('servicios.index');
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function edit(Servicio $servicio)
    {
        $clientes = Cliente::all();
        $equipos = Equipo::all();
        $tecnicos = Tecnico::all();
        return view('servicios.edit', compact('servicio', 'clientes', 'equipos', 'tecnicos'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $validated = $request->validate([
            'cliente_id' => 'required',
            'equipo_id' => 'required',
            'tecnico_id' => 'required',
            'fecha_recepcion' => 'required',
            'problema' => 'required',
            'estado' => 'required',
        ]);

        $servicio->update($validated);

        return redirect()->route('servicios.index');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
