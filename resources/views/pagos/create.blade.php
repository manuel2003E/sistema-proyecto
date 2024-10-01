@extends('layout.app')

@section('title', 'Registrar Pago')

@section('content')
<div class="container">
    <h1><i>Registrar Pago</i></h1>
    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select class="form-select" name="cliente_id" required>
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="monto_pago" class="form-label">Monto Pago</label>
            <input type="number" class="form-control" name="monto_pago" required>
        </div>
        <div class="mb-3">
            <label for="fecha_pago" class="form-label">Fecha Pago</label>
            <input type="date" class="form-control" name="fecha_pago" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método Pago</label>
            <input type="text" class="form-control" name="metodo_pago" required>
        </div>
        <button type="submit" class="btn btn-success"><i>Guardar</i></button>
        <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
