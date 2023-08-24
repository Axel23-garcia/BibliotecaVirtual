<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $usuario = Usuario::paginate(10);
        return view('Usuario.Uindex')->with('usuarios',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuario.Ucreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'correo_electronico'=>'required|',
            'telefono'=>'required|regex:/[0-9]/',
            'direccion'=>'required',

        ]);


        $usuario = new Usuario();
        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');


        if ($usuario->save()){
            $mensaje = "El usuario se creo  exitosamente";
        }

        return redirect()->route('usuario.index')->with('mensaje',$mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $usuario = Usuario::findOrfail($id);
        return view('Usuario.Ushow' , compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrfail($id);
        return view('usuario.Uedit')->with('usuario',$usuario);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrfail($id);

        $request->validate([
            'nombre'=>'required',
            'correo_electronico'=>'required',
            'telefono'=>'required|regex:/[0-9]/',
            'direccion'=>'required|',

        ]);


        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');


        if ($usuario->save()){
            $mensaje = "Se actualizaron los datos correctamente";
        }

        return redirect()->route('usuario.index')->with('mensaje',$mensaje);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuario.index');
    }
}
