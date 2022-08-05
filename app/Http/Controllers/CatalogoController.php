<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //IMPORTANTE
use Illuminate\Http\Request;
//models
use App\Models\Catalogo;
use App\Models\Status;
class CatalogoController extends Controller
{

    public function index()
    {
            //POR ESTE QUERY PODEMOS MOSTRAR EL VALOR  DE LA FK, pero primero deben estar vinculadas desde el modelo 
        $catalogos=Catalogo::with('status')->get();
        
        /*DB::table('catalogos as c')
                     ->join('statuses as s','c.status_id',"=",'s.id')
                     ->SELECT('c.id','c.nombre','c.img_portada','c.archivo','s.name_status')
                     ->get();
*/
        return $catalogos;
    }

    public function store(Request $request)
    {
        $catalogo= new Catalogo();
        $catalogo->nombre      = $request->nombre;
        $catalogo->img_portada = $request->img_portada;
        $catalogo->archivo     = $request->archivo;
        $catalogo->status_id   = $request->status_id;
        $catalogo->save();
    }

    public function show($id)
    {
        $catalogo=Catalogo::find($id);
        return $catalogo;
    }

    public function update(Request $request )
    {
        
        $catalogo = Catalogo::findOrFail($request->id);
        $catalogo->nombre      = $request->nombre;
        $catalogo->img_portada = $request->img_portada;
        $catalogo->archivo     = $request->archivo;
        $catalogo->status_id   = $request->status_id;
        $catalogo->save();
    }

    public function destroy($id)
    {
        $catalogo = Catalogo::destroy($id);
        return $catalogo;
    }
}
