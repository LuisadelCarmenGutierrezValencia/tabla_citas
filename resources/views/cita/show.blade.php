@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de la Cita</div>
                <div class="card-body">
                    <p><strong>Nombre Cliente:</strong> {{ $cita->nombre_cliente }}</p>
                    <p><strong>Teléfono:</strong> {{ $cita->telefono }}</p>
                    <p><strong>Correo:</strong> {{ $cita->correo }}</p>
                    <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
                    <p><strong>Hora:</strong> {{ $cita->hora }}</p>
                    <p><strong>Descripción:</strong> {{ $cita->descripcion }}</p>
                    <p><strong>Confirmada:</strong> {{ $cita->confirmada ? 'Sí' : 'No' }}</p>
                    <a href="{{ route('citas.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
