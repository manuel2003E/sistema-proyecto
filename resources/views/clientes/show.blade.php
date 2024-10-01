@extends('layout.app')

@section('title', 'Detalles del Cliente')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
    <p><strong>DUI:</strong> {{ $cliente->dui }}</p>
    <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
    <p><strong>Correo:</strong> {{ $cliente->correo }}</p>
    <p><strong>Fecha de Registro:</strong> {{ $cliente->fecha_registro }}</p>
    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
