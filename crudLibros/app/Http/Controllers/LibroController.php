<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks= libro::all();
        return view('libros.index',compact('allbooks'));
    }


    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo = $request->txttit;
        $addLibro->autor = $request->txtaut;
        $addLibro->paginas = $request->txtpag;
        $addLibro->anio = $request->txtan;
        $addLibro->save();

        return redirect()->back();

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $uptlibro= libro::find($id);
        $uptlibro->titulo = $request->txttit;
        $uptlibro->autor = $request->txtaut;
        $uptlibro->paginas = $request->txtpag;
        $uptlibro->anio = $request->txtan;
        $uptlibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro= libro::find($id);
        $deslibro->delete();
        return redirect()->back();

    }
}
