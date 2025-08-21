@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Cita</div>
                <div class="card-body">
                    <form action="{{ route('citas.store') }}" method="POST">
                        @csrf
                        @include('cita.form')
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
