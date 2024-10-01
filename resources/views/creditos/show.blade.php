@extends('layout.app')

@section('title', 'Detalles del Crédito')

@section('content')
<div class="container">
    <h1>Detalles del Crédito</h1>
    <p><strong>Cliente:</strong> {{ $credito->cliente->nombre }}</p>
    <p><strong>Monto Crédito:</strong> {{ $credito->monto_credito }}</p>
    <p><strong>Tasa de Interés:</strong> {{ $credito->tasa_interes }}</p>
    <p><strong>Estado Crédito:</strong> {{ $credito->estado_credito }}</p>
    <p><strong>Días de Gracia:</strong> {{ $credito->dia_gracia }}</p>
    <p><strong>Días de Atraso:</strong> {{ $credito->dia_atraso }}</p>
    <p><strong>Monto Mora Diario:</strong> {{ $credito->monto_mora_diario }}</p>
    <p><strong>Días Atraso:</strong> {{ $credito->dias_atraso }}</p>
    <p><strong>Monto Total Mora:</strong> {{ $credito->monto_total_mora }}</p>
    <a href="{{ route('creditos.edit', $credito) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('creditos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
