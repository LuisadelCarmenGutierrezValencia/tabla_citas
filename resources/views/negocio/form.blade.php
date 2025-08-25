<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $negocio->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $negocio->direccion ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="negocio" class="form-label">Negocio</label>
    <input type="text" name="negocio" class="form-control" value="{{ old('negocio', $negocio->negocio ?? '') }}" required>
</div>
