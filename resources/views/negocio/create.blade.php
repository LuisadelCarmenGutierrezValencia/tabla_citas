@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Negocio</div>
                <div class="card-body">
                    <form action="{{ route('negocio.store') }}" method="POST">
                        @csrf
                        @include('negocio.form')
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('negocio.index') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
