<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacto;
use App\Models\Status;

class ContactoController extends Controller
{
 
    public function index()
    {
        $contactos=Contacto::with('status')->get();
        return $contactos;
    }
  
    public function store(Request $request)
    {
        $contacto=new Contacto();
        $contacto->nombre_contacto = $request->nombre_contacto;
        $contacto->direccion       = $request->direccion;
        $contacto->cargo           = $request->cargo;
        $contacto->email           = $request->email;
        $contacto->telefono        = $request->telefono;
        $contacto->status_id       = $request->status_id;
        $contacto->save();
    }
 
    public function show($id)
    {
        $contacto=Contacto::with('status')->find($id);
        return $contacto;
    }
 
    public function update(Request $request )
    {
        $contacto= Contacto::findOrFail($request->id);
        $contacto->nombre_contacto = $request->nombre_contacto;
        $contacto->direccion       = $request->direccion;
        $contacto->cargo           = $request->cargo;
        $contacto->email           = $request->email;
        $contacto->telefono        = $request->telefono;
        $contacto->status_id       = $request->status_id;
        $contacto->save();
    }
 
    public function destroy($id)
    {
        $contacto=Contacto::destroy($id);
        return $contacto;
    }
}
