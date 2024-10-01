<?php
namespace App\Http\Controllers;

use App\Models\Credito;
use App\Models\Cliente;
use Illuminate\Http\Request;

class CreditoController extends Controller
{
    public function index()
    {
        $creditos = Credito::with('cliente')->get();
        return view('creditos.index', compact('creditos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('creditos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'monto_credito' => 'required|numeric',
            'tasa_interes' => 'required|numeric',
            'estado_credito' => 'required',
            'dia_gracia' => 'required|integer',
            'dia_atraso' => 'required|integer',
            'monto_mora_diario' => 'required|numeric',
            'dias_atraso' => 'required|integer',
            'monto_total_mora' => 'required|numeric',
        ]);

        Credito::create($request->all());
        return redirect()->route('creditos.index');
    }

    public function edit(Credito $credito)
    {
        $clientes = Cliente::all();
        return view('creditos.edit', compact('credito', 'clientes'));
    }

    public function update(Request $request, Credito $credito)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'monto_credito' => 'required|numeric',
            'tasa_interes' => 'required|numeric',
            'estado_credito' => 'required',
            'dia_gracia' => 'required|integer',
            'dia_atraso' => 'required|integer',
            'monto_mora_diario' => 'required|numeric',
            'dias_atraso' => 'required|integer',
            'monto_total_mora' => 'required|numeric',
        ]);

        $credito->update($request->all());
        return redirect()->route('creditos.index');
    }

    public function show(Credito $credito)
    {
        return view('creditos.show', compact('credito'));
    }

    public function destroy(Credito $credito)
    {
        $credito->delete();
        return redirect()->route('creditos.index');
    }
}
