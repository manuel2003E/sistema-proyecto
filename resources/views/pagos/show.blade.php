@extends('layout.app')

@section('title', 'Detalles del Pago')

@section('content')
<div class="container">
    <h1>Detalles del Pago</h1>
    <p><strong>Cliente:</strong> {{ $pago->cliente->nombre }}</p>
    <p><strong>Monto Pago:</strong> {{ $pago->monto_pago }}</p>
    <p><strong>Fecha Pago:</strong> {{ $pago->fecha_pago }}</p>
    <p><strong>Método Pago:</strong> {{ $pago->metodo_pago }}</p>
    <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
