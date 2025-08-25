@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Negocio</div>
                <div class="card-body">
                    <form action="{{ route('negocio.update', $negocio->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('negocio.form')
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('negocio.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
