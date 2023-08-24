<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $libro = Libro::paginate(10);
        return view('Libro.Lindex')->with('libros',$libro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Libro.LCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'autor'=>'required',
            'editorial'=>'required|regex:/[A-Z][a-z]+/i',
            'anio_publicacion'=>'required|numeric|min:1997|max:2023',
            'cantidad_disponible'=>'required|numeric|min:1|max:100',

        ]);


        $libro = new Libro();
        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->editorial=$request->input('editorial');
        $libro->anio_publicacion=$request->input('anio_publicacion');
        $libro->cantidad_disponible=$request->input('cantidad_disponible');

      if ($libro->save()){
          $mensaje = "El libro se creo con exito";
      }

        return redirect()->route('libro.index')->with('mensaje',$mensaje);
    }

    public function show(string $id)
    {

        $libro = Libro::findOrfail($id);
        return view('Libro.Lshow' , compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrfail($id);
        return view('libro.Ledit')->with('libros',$libro);

    }


    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrfail($id);

        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'autor'=>'required',
            'editorial'=>'required|regex:/[A-Z][a-z]+/i', // formato nombre@nombe.algo
            'anio_publicacion'=>'required|numeric|min:1997|max:2023',
            'cantidad_disponible'=>'required|numeric|min:1|max:100',

        ]);



        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->editorial=$request->input('editorial');
        $libro->anio_publicacion=$request->input('anio_publicacion');
        $libro->cantidad_disponible=$request->input('cantidad_disponible');


        if ($libro->save()){
            $mensaje = "Se actulizaron los datos correctamente";
        }

        return redirect()->route('libro.index')->with('mensaje',$mensaje);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libro::destroy($id);
        return redirect()->route('libro.index');
    }
}
