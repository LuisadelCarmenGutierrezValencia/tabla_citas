@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Usuario</div>
                <div class="card-body">
                    <form action="{{ route('usuario.store') }}" method="POST">
                        @csrf
                        @include('usuario.form')
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
