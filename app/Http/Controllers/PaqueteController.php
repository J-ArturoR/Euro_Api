<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paquete;
class PaqueteController extends Controller
{
  
    public function index()
    {
        $paquetes=Paquete::with('prioridad')->with('status')->with('tipo')->get();
        return $paquetes;
    }
 
    public function store(Request $request)
    {
        $paquete= new Paquete();
        $paquete->img_portada = $request->img_portada;
        $paquete->pagado         = $request->pagado;
        $paquete->prioridad_id   = $request->prioridad_id;
        $paquete->titulo_paquete = $request->titulo_paquete;
        $paquete->apertura       = $request->apertura;
        $paquete->fin            = $request->fin;
        $paquete->status_id     = $request->status_id;
        $paquete->tipo_id        = $request->tipo_id;
        $paquete->vuelo          = $request->vuelo;
        $paquete->traslado       = $request->traslado;
        $paquete->alojamiento    = $request->alojamiento;
        $paquete->asistencia     = $request->asistencia;
        $paquete->seguro         = $request->seguro;
        $paquete->impuesto       = $request->impuesto; 
        $paquete->otros          = $request->otros; 
        $paquete->descripcion    = $request->descripcion;
        $paquete->save();
    }
 
    public function show($id)
    {
        $paquete=Paquete::with('prioridad')->with('status')->with('tipo')->find($id);
        return $paquete;
    }
 
    public function update(Request $request)
    {
        $paquete=Paquete::findOrFail($request->id);
        $paquete->img_portada = $request->img_portada;
        $paquete->pagado         = $request->pagado;
        $paquete->prioridad_id   = $request->prioridad_id;
        $paquete->titulo_paquete         = $request->titulo_paquete;
        $paquete->apertura       = $request->apertura;
        $paquete->fin            = $request->fin;
        $paquete->status_id      = $request->status_id;
        $paquete->tipo_id        = $request->tipo_id;
        $paquete->vuelo          = $request->vuelo;
        $paquete->traslado       = $request->traslado;
        $paquete->alojamiento    = $request->alojamiento;
        $paquete->asistencia     = $request->asistencia;
        $paquete->seguro         = $request->seguro;
        $paquete->impuesto       = $request->impuesto; 
        $paquete->otros          = $request->otros; 
        $paquete->descripcion    = $request->descripcion;
        $paquete->save();
    }
 
    public function destroy($id)
    {
        $paquete=Paquete::destroy($id);
        return $paquete;
    }
}
