@extends('layout.app')

@section('title', 'Pagos')

@section('content')
<div class="container">
    <h1>Pagos</h1>
    <a href="{{ route('pagos.create') }}" class="btn btn-primary">Registrar Pago</a>
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Monto Pago</th>
                <th>Fecha Pago</th>
                <th>Método Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->cliente->nombre }}</td>
                <td>{{ $pago->monto_pago }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>{{ $pago->metodo_pago }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    <a href="{{ route('pagos.show', $pago) }}" class="btn btn-info">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
