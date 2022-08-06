<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItinerarioDestino;
class ItinerarioDestController extends Controller
{
 
    public function index()
    {
        $itineriarioDestinos=ItinerarioDestino::with('status')->with('destino')->get();
        return $itineriarioDestinos;
    }
 
    public function store(Request $request)
    {
        $itineriarioDestino= new ItinerarioDestino();
        $itineriarioDestino->dia       = $request->dia;
        $itineriarioDestino->lugar     = $request->lugar;
        $itineriarioDestino->actividad = $request->actividad;
        $itineriarioDestino->status_id = $request->status_id;
        $itineriarioDestino->save();
    }
 
    public function show($id)
    {
        $itineriarioDestino=ItinerarioDestino::with('status')->with('destino')->find($id);
        return $itineriarioDestino;
    }
 
    public function update(Request $request)
    {
        $itineriarioDestino=ItinerarioDestino::findOrFail($request->id);
        $itineriarioDestino->dia       = $request->dia;
        $itineriarioDestino->lugar     = $request->lugar;
        $itineriarioDestino->actividad = $request->actividad;
        $itineriarioDestino->status_id = $request->status_id;
        $itineriarioDestino->save();
    }
 
    public function destroy($id)
    {
        $itineriarioDestino=ItinerarioDestino::destroy($id);
        return $itineriarioDestino;
    }
}
