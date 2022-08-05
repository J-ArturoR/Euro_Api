<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItinerarioCircuito;
class ItinerarioCirController extends Controller
{
 
    public function index()
    {
        $itinerarioCircuitos=ItinerarioCircuito::with('status')->with('circuito')->get();
                                //i.dia','i.lugar','i.actividad','s.name_status
        return $itinerarioCircuitos;
    }
 
    public function store(Request $request)
    {
        $itinerarioCircuito= new ItinerarioCircuito();
        $itinerarioCircuito->dia       = $request->dia;
        $itinerarioCircuito->lugar     = $request->lugar;
        $itinerarioCircuito->actividad = $request->actividad;
        $itinerarioCircuito->status_id = $request->status_id;
        $itinerarioCircuito->circuito_id = $request->circuito_id;
        $itinerarioCircuito->save();
    }
 
    public function show($id)
    {
        $itinerarioCircuito=ItinerarioCircuito::find($id);
        return $itinerarioCircuito;
    }
 
    public function update(Request $request)
    {
        $itinerarioCircuito=ItinerarioCircuito::findOrFail($request->id);
        $itinerarioCircuito->dia       = $request->dia;
        $itinerarioCircuito->lugar     = $request->lugar;
        $itinerarioCircuito->actividad = $request->actividad;
        $itinerarioCircuito->status_id = $request->status_id;
        $itinerarioCircuito->circuito_id = $request->circuito_id;
        $itinerarioCircuito->save();
    }
 
    public function destroy($id)
    {
        $itinerarioCircuito=ItinerarioCircuito::destroy($id);
        return $itinerarioCircuito;
    }
}
