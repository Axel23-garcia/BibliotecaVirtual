<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //          MODELO  NUMERO DE DATOS QUE QUIERO QUE SALGAN
        $libro = Libro::paginate(10); // este es el numero de datos que va a reflejar
        return view('Libro.Lindex')->with('libros',$libro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
