<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $prestamo = Prestamo::paginate(10);
        return view('Prestamo.Pindex')->with('prestamos',$prestamo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Prestamo.Pcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_solicitud'=>'required',
            'fecha_prestamo'=>'required',
            'fecha_devolucion'=>'required',
            'libro_id'=>'required|numeric|min:0|max:300',
            'usuario_id'=>'required|numeric|min:0|max:300',

        ]);


        $prestamo = new Prestamo();
        $prestamo->fecha_solicitud=$request->input('fecha_solicitud');
        $prestamo->fecha_prestamo=$request->input('fecha_prestamo');
        $prestamo->fecha_devolucion=$request->input('fecha_devolucion');
        $prestamo->libro_id=$request->input('libro_id');
        $prestamo->usuario_id=$request->input('usuario_id');


        if ($prestamo->save()){
            $mensaje = "El Prestamo se creo con exito";
        }

        return redirect()->route('prestamo.index')->with('mensaje',$mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $prestamo = Prestamo::findOrfail($id);
        return view('Prestamo.Pshow' , compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prestamo = Prestamo::findOrfail($id);
        return view('Prestamo.Pedit')->with('prestamo',$prestamo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prestamo = Prestamo::findOrfail($id);

        $request->validate([
            'fecha_solicitud'=>'required',
            'fecha_prestamo'=>'required',
            'fecha_devolucion'=>'required',
            'libro_id'=>'required|numeric|min:0|max:300',
            'usuario_id'=>'required|numeric|min:0|max:300',


        ]);



        $prestamo->fecha_solicitud=$request->input('fecha_solicitud');
        $prestamo->fecha_prestamo=$request->input('fecha_prestamo');
        $prestamo->fecha_devolucion=$request->input('fecha_devolucion');
        $prestamo->libro_id=$request->input('libro_id');
        $prestamo->usuario_id=$request->input('usuario_id');

        if ($prestamo->save()){
            $mensaje = "Se actulizaron los datos correctamente";
        }

        return redirect()->route('prestamo.index')->with('mensaje',$mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prestamo::destroy($id);
        return redirect()->route('prestamo.index');
    }
}
