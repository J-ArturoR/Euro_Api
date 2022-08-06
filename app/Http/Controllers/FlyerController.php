<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Flyer;

use App\Models\Status;
class FlyerController extends Controller
{
 
    public function index()
    {
      
        $flyers=Flyer::with('status')->with('circuito')->with('prioridad')->get();
        return $flyers;
    }
 
    public function store(Request $request)
    {
        $flyer=new Flyer();
        $flyer->imagen_portada =$request->imagen_portada;
        $flyer->titulo = $request->titulo;
        $flyer->status_id = $request->status_id;
        $flyer->personalizable = $request->personalizable;
        $flyer->fecha_apertura = $request->fecha_apertura;
        $flyer->fecha_vigencia= $request->fecha_vigencia;
        $flyer->prioridad_id = $request->prioridad_id;
       // $flyer->$paquete_id= $request->paquete_id;
        $flyer->salidas = $request->salidas;
        $flyer->save();
    }
 
    public function show($id)
    {
        $flyer=Flyer::find($id);
        return $flyer;
    }
 
    public function update(Request $request )
    {
        $flyer->imagen_portada =$request->imagen_portada;
        $flyer->titulo = $request->titulo;
        $flyer->status_id = $request->status_id;
        $flyer->personalizable = $request->personalizable;
        $flyer->fecha_apertura = $request->fecha_apertura;
        $flyer->fecha_vigencia= $request->fecha_vigencia;
        $flyer->prioridad_id = $request->prioridad_id;
       // $flyer->$paquete_id= $request->paquete_id;
        $flyer->salidas = $request->salidas;
        $flyer->save();
    }
 
    public function destroy($id)
    {
        $flyer=Flyer::destroy($id);
        return $flyer;
    }
}
