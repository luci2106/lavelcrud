<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{

    public function index()
    {
        $modulos = Modulo::all();
        return view('modulos.index', compact('modulos'));

        //alternativas a compact
        //return view('students.index')->with('students', $students);
        //return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('modulos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'curso' => 'required|string',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Modulo::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('modulos.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $modulo = Modulo::findOrFail($id);
        return view('modulos.edit', compact('modulo'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'curso' => 'required|integer|min:1',
        ]);

        // Buscar el estudiante por su ID
        $modulo = Modulo::findOrFail($id);

        // Actualizar los datos del estudiante
        $modulo->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('modulos.index');
    }

    public function destroy(string $id)
    {
        $modulo = Modulo::findOrFail($id);

        $modulo->delete();

        return redirect()->route('modulos.index');
    }
}
?>