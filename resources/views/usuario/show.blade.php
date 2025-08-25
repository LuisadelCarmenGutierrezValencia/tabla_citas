@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle del Usuario</div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
                    <p><strong>Correo:</strong> {{ $usuario->correo }}</p>
                    <p><strong>Rol:</strong> {{ $usuario->rol }}</p>
                    <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
