<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
class LogoController extends Controller
{
 
    public function index()
    {
        
        $logos=Logo::all();
        return $logos;
    }
 
    public function store(Request $request)
    {
        $logo= new Logo();
        $logo->$name = $request->name;
        $logo->$logo = $request->logo;
        $logo->save();
    }
 
    public function show($id)
    {
        $logo=Logo::find($id);
        return $logo;
    }
 
    public function update(Request $request )
    {
        $logo=Log::findOrFail($request->id);
        $logo->$name = $request->name;
        $logo->$logo = $request->logo;
        $logo->save();
    }
 
    public function destroy($id)
    {
        $logo=Logo::destroy($id);
        return $logo;
    }
}
