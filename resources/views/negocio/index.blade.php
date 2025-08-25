@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Negocios
                    <a href="{{ route('negocio.create') }}" class="btn btn-primary btn-sm float-end">Nuevo Negocio</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Negocio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($negocios as $negocio)
                                <tr>
                                    <td>{{ $negocio->id }}</td>
                                    <td>{{ $negocio->nombre }}</td>
                                    <td>{{ $negocio->direccion }}</td>
                                    <td>{{ $negocio->negocio }}</td>
                                    <td>
                                        <a href="{{ route('negocio.show', $negocio->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('negocio.edit', $negocio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('negocio.destroy', $negocio->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Si no usas paginación, elimina esta línea --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
