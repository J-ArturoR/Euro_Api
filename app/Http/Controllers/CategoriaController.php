<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
 
    public function index()
    {
        $categorias=Categoria::all();
        return $categorias;
    }
 
    public function store(Request $request)
    {
        $categoria= new Categoria();
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->save();
    }
 
    public function show($id)
    {
        $categoria= Categoria::find($id);
        return $categoria;
    }
 
    public function update(Request $request )
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->save();
    }
 
    public function destroy($id)
    {
        $categoria= Categoria::destroy($id);
        return $categoria;
    }
}
