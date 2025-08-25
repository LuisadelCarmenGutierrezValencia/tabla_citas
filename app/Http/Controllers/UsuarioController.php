<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required',
            'rol' => 'required',
        ]);
        $data = $request->all();
        $data['contraseña'] = Hash::make($data['contraseña']);
        Usuario::create($data);
        return redirect()->route('usuario.index')->with('success', 'Usuario creado correctamente');
    }

    public function show(Usuario $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'rol' => 'required',
        ]);
        $data = $request->all();
        if (!empty($data['contraseña'])) {
            $data['contraseña'] = Hash::make($data['contraseña']);
        } else {
            unset($data['contraseña']);
        }
        $usuario->update($data);
        return redirect()->route('usuario.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado correctamente');
    }
}
