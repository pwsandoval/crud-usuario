<?php

namespace Peter\Http\Controllers;

use Illuminate\Http\Request;
use Peter\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function show($id) {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function destroy($id) {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')
                         ->with('info', 'El usuario ha sido eliminado');
    }

    public function edit($id) {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function create() {
        return view('usuarios.create');
    }

    public function store(Request $request) {
        $usuario = new Usuario; //crear una instancia
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->edad = $request->edad;
        $usuario->sexo = $request->sexo;
        $usuario->save();
        return redirect()->route('usuarios.index')
                         ->with('info', 'El usuario ha sido registrado');
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->edad = $request->edad;
        $usuario->sexo = $request->sexo;
        $usuario->update();
        return redirect()->route('usuarios.index')
                         ->with('info', 'El usuario ha sido actualizado');
    }
}
