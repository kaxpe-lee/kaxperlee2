<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();

        return view('libros.libros', compact('libros'));
        //return $libros;
    }

    public function show($id)
    {
        $libro =Libro::find($id);
        return view('libros.show', compact('libro'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $libro = new Libro();

        $libro->title = $request->title;
        $libro->sort = $request->sort;
        $libro->author_sort = $request->author_sort;

        $libro->save();
        
        return redirect()->route('libros.show', $libro);   
    }

}
