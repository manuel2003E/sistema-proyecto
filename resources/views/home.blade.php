@extends('layout.app')

@section('title', 'Inicio')

@section('content')
    <div class="jumbotron text-center">
        <h1><i>Bienvenido a la Plataforma de Gestión de Clientes, Créditos y Pagos</i></h1>
        <p class="lead"><i>Administra de manera eficiente tus clientes, créditos y pagos.</i></p>
        <p class="lead"><i>Desarrolladores de Software</i></p>
        <p class="lead"><i>Carlos Miguel y Manuel Alejandro </p>
        <p><i>Utiliza el menú superior para navegar a las diferentes secciones del sistema.</i></p>
        <a class="btn btn-outline-info" href="{{ route('clientes.index') }}" role="button"><i>Ver Clientes</i></a>
        <a class="btn btn-outline-success" href="{{ route('creditos.index') }}" role="button"><i>Ver Créditos</i></a>
        <a class="btn btn-outline-info" href="{{ route('pagos.index') }}" role="button"><i>Ver Pagos</i></a>
        <a class="btn btn-outline-info" href="{{ route('reportes.index') }}" role="button"><i>Ver Reportes</i></a>

    </div>
@endsection
