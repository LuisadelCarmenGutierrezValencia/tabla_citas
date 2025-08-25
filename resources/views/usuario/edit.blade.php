@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Usuario</div>
                <div class="card-body">
                    <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('usuario.form')
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
