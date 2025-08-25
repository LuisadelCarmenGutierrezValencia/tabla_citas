<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $usuario->nombre ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" name="correo" class="form-control" value="{{ old('correo', $usuario->correo ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" name="contraseña" class="form-control">
    @if(isset($usuario))
        <small class="form-text text-muted">Deja en blanco para no cambiar la contraseña.</small>
    @endif
</div>
<div class="mb-3">
    <label for="rol" class="form-label">Rol</label>
    <input type="text" name="rol" class="form-control" value="{{ old('rol', $usuario->rol ?? '') }}" required>
</div>
