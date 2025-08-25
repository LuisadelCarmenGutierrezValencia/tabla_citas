@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle del Negocio</div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $negocio->nombre }}</p>
                    <p><strong>Dirección:</strong> {{ $negocio->direccion }}</p>
                    <p><strong>Negocio:</strong> {{ $negocio->negocio }}</p>
                    <a href="{{ route('negocio.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
