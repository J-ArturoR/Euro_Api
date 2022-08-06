<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Protocolo;

class ProtocoloController extends Controller
{
 
    public function index()
    {
        $protocolos=Protocolo::with('status')->with('prioridad')->with('tipo')->get();
        return $protocolos;
    }
  
    public function store(Request $request)
    {
        $protocolo= new Protocolo();
        $protocolo->nombre_protocolo           = $request->nombre ;
        $protocolo->img              = $request->img ;
        $protocolo->archivo          = $request->archivo ;
        $protocolo->status_id        = $request->status_id ;
        $protocolo->tags             = $request->tags ;
        $protocolo->prioridad_id        = $request->prioridad ;
        $protocolo->tipo_protocoloid = $request->tipo_protocoloid ;
        $protocolo->save();        
    }
 
    public function show($id)
    {
        $protocolo=Protocolo::with('status')->with('prioridad')->with('tipo')->find($id);
        return $protocolo;
    }
 
    public function update(Request $request )
    {
        $protocolo=Protocolo::findOrFail($id);
        $protocolo->nombre_protocolo           = $request->nombre ;
        $protocolo->img              = $request->img ;
        $protocolo->archivo          = $request->archivo ;
        $protocolo->status_id        = $request->status_id ;
        $protocolo->tags             = $request->tags ;
        $protocolo->prioridad_id        = $request->prioridad ;
        $protocolo->tipo_protocoloid = $request->tipo_protocoloid ;
        $protocolo->save();    
    }
 
    public function destroy($id)
    {
        $protocolo = Protocolo::destroy($id);
        return $protocolo;
    }
}
