<div class="mb-3">
    <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
    <input type="text" name="nombre_cliente" class="form-control" value="{{ old('nombre_cliente', $cita->nombre_cliente ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cita->telefono ?? '') }}">
</div>
<div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" name="correo" class="form-control" value="{{ old('correo', $cita->correo ?? '') }}">
</div>
<div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $cita->fecha ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="hora" class="form-label">Hora</label>
    <input type="time" name="hora" class="form-control" value="{{ old('hora', $cita->hora ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $cita->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="confirmada" class="form-label">Confirmada</label>
    <select name="confirmada" class="form-control">
        <option value="0" {{ old('confirmada', $cita->confirmada ?? 0) == 0 ? 'selected' : '' }}>No</option>
        <option value="1" {{ old('confirmada', $cita->confirmada ?? 0) == 1 ? 'selected' : '' }}>Sí</option>
    </select>
</div>
