<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Destino;
class DestinoController extends Controller
{
 
    public function index()
    {
        $destinos=Destino::with('status')->with('categoria')->get();
        return $destinos;
    }
 
    public function store(Request $request)
    {
        $destino= new Destino();
        $destino->nombre_destino = $request->nombre_destino; 
        $destino->desc_corta     = $request->desc_corta;
        $destino->desc_larga     = $request->desc_larga;
        $destino->duracion       = $request->duracion;
        $destino->costo          = $request->costo;
        $destino->vuelo          = $request->vuelo;
        $destino->traslados      = $request->traslados;
        $destino->alojamiento    = $request->alojamiento;
        $destino->maleta         = $request->maleta;
        $destino->impuesto       = $request->impuesto;
        $destino->incluye_id     = $request->incluye_id;
        $destino->staus_id       = $request->staus_id;
        $destino->categoria_id   = $request->categoria_id;
        $destino->save();
        
        //$destino->$img_id       = $request->img_id;
    }
 
    public function show($id)
    {
        $destino= Destino::find($id);
        return $destino;
    }
 
    public function update(Request $request )
    {
        $destino=Destino::findOrFail($request->id);
        $destino->nombre_destino = $request->nombre_destino; 
        $destino->desc_corta     = $request->desc_corta;
        $destino->desc_larga     = $request->desc_larga;
        $destino->duracion       = $request->duracion;
        $destino->costo          = $request->costo;
        $destino->vuelo          = $request->vuelo;
        $destino->traslados      = $request->traslados;
        $destino->alojamiento    = $request->alojamiento;
        $destino->maleta         = $request->maleta;
        $destino->impuesto       = $request->impuesto;
        $destino->incluye_id     = $request->incluye_id;
        $destino->staus_id       = $request->staus_id;
        $destino->categoria_id   = $request->categoria_id;
        $destino->save();
    }
 
    public function destroy($id)
    {
        $destino=Destino::destroy($id);
        return $destino;
    }
}
