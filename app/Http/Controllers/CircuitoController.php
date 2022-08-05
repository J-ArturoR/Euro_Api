<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//Modelos
use App\Models\Circuito;
use App\Models\ItinerarioCircuito;
class CircuitoController extends Controller
{
    public function index()
    {
        $circuitos=Circuito::with('tipo')->with('flyer')->with('catalogo')->with('prioridad')->with('status')->with('categoria')->select('*')->get();              
        return $circuitos;
    /* 
       DB::table('circuitos as c')
        ->join('iconografias as i','c.iconografia_id',"=",'i.id')
        ->join('tipo__productos as tp','c.tipo_id',"=",'tp.id')
        ->join('flyers as f','c.flyer_id',"=",'f.id')
        ->join('catalogos as cat','c.catalogo_id',"=",'cat.id')
        ->join('prioridads as p','c.prioridad_id',"=",'p.id')
        ->join('itinerario_circuitos as it','c.id',"=",'it.id')
        ->join('statuses as s','c.status_id',"=",'s.id')
        ->join('categorias as cg','c.categoria_id',"=",'cg.id')
        ->select('*')->get();
    */
    }
 
    public function store(Request $request)
    {
        $circuito = new Circuito();
        $circuito->titulo           = $request->titulo;
        $circuito->tipo_id          = $request->tipo_id;
        $circuito->duracion         = $request->duracion;
        $circuito->fecha_inicio     = $request->fecha_inicio;
        $circuito->fecha_fin        = $request->fecha_fin;
        $circuito->ruta             = $request->ruta;
        $circuito->salida           = $request->salida;
        $circuito->descripcion      = $request->descripcion;
        $circuito->precio           = $request->precio;
        $circuito->denominacion     = $request->denominacion;
        $circuito->img_portada      = $request->img_portada;
        $circuito->img_mapa         = $request->img_mapa;
        $circuito->pdf              = $request->pdf;
        $circuito->pdf_condiciones  = $request->pdf_condiciones;
        $circuito->iconografia_id   = $request->iconografia_id;
        $circuito->flyer_id         = $request->flyer_id;
        $circuito->catalogo_id      = $request->catalogo_id;
        $circuito->tag              = $request->tag;
        $circuito->prioridad_id     = $request->prioridad_id;
        $circuito->itinerario_id    = $request->itinerario_id;
        $circuito->incluye_id       = $request->incluye_id;

        $circuito->save();
    }
 
    public function show($id)
    {
        $circuito=Circuito::find($id);
        $incluye=ItinerarioCircuito::select("*")->where('circuito_id','=',$id)->get();
        return $circuito;
    }
 
    public function update(Request $request )
    {
        $circuito=Circuito::findOrFail($request->id);
        $circuito->titulo           = $request->titulo;
        $circuito->tipo_id          = $request->tipo_id;
        $circuito->duracion         = $request->duracion;
        $circuito->fecha_inicio     = $request->fecha_inicio;
        $circuito->fecha_fin        = $request->fecha_fin;
        $circuito->ruta             = $request->ruta;
        $circuito->salida           = $request->salida;
        $circuito->descripcion      = $request->descripcion;
        $circuito->precio           = $request->precio;
        $circuito->denominacion     = $request->denominacion;
        $circuito->img_portada      = $request->img_portada;
        $circuito->img_mapa         = $request->img_mapa;
        $circuito->pdf              = $request->pdf;
        $circuito->pdf_condiciones  = $request->pdf_condiciones;
        $circuito->iconografia_id   = $request->iconografia_id;
        $circuito->flyer_id         = $request->flyer_id;
        $circuito->catalogo_id      = $request->catalogo_id;
        $circuito->tag              = $request->tag;
        $circuito->prioridad_id     = $request->prioridad_id;
        $circuito->itinerario_id    = $request->itinerario_id;
        $circuito->incluye_id       = $request->incluye_id;
        $circuito->save();
        return $circuito;
    }
 
    public function destroy($id)
    {
       $circuito= Circuito::destroy($id);
       return $circuito;
    }
}
