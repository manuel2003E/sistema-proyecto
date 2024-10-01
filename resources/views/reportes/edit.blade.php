@extends('layout.app')

@section('title', 'Editar Reporte')

@section('content')
<div class="container">
    <h1><i>Editar Reporte</i></h1>
    <form action="{{ route('reportes.update', $reporte) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $reporte->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="credito_id" class="form-label">Crédito</label>
            <select class="form-select" name="credito_id" required>
                @foreach ($creditos as $credito)
                <option value="{{ $credito->id }}" {{ $reporte->credito_id == $credito->id ? 'selected' : '' }}>{{ $credito->monto_credito }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_pagado" class="form-label">Monto Pagado</label>
            <input type="number" class="form-control" name="monto_pagado" value="{{ $reporte->monto_pagado }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha Pago</label>
            <input type="date" class="form-control" name="fecha_pago" value="{{ $reporte->fecha_pago }}" required>
        </div>
        <div class="mb-3">
            <label for="tipo_reporte" class="form-label">Tipo Reporte</label>
            <input type="text" class="form-control" name="tipo_reporte" value="{{ $reporte->tipo_reporte }}" required>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" name="observaciones">{{ $reporte->observaciones }}</textarea>
        </div>
        <button type="submit" class="btn btn-success"><i>Actualizar</i></button>
        <a href="{{ route('reportes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
