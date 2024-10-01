<?php
namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Cliente;
use App\Models\Credito;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reportes = Reporte::with(['cliente', 'credito'])->get();
        return view('reportes.index', compact('reportes'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $creditos = Credito::all();
        return view('reportes.create', compact('clientes', 'creditos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'credito_id' => 'required|exists:creditos,id',
            'monto_pagado' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'tipo_reporte' => 'required',
            'observaciones' => 'nullable|string',
        ]);

        Reporte::create($request->all());
        return redirect()->route('reportes.index');
    }

    public function edit(Reporte $reporte)
    {
        $clientes = Cliente::all();
        $creditos = Credito::all();
        return view('reportes.edit', compact('reporte', 'clientes', 'creditos'));
    }

    public function update(Request $request, Reporte $reporte)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'credito_id' => 'required|exists:creditos,id',
            'monto_pagado' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'tipo_reporte' => 'required',
            'observaciones' => 'nullable|string',
        ]);

        $reporte->update($request->all());
        return redirect()->route('reportes.index');
    }

    public function show(Reporte $reporte)
    {
        return view('reportes.show', compact('reporte'));
    }

    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reportes.index');
    }
}
