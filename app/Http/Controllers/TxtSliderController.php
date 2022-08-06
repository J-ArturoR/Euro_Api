<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\TextoSlider;
class TxtSliderController extends Controller
{
 
    public function index()
    {
        $txtSliders=TextoSlider::with('status')->get();

        return $txtSliders;
    }
 
    public function store(Request $request)
    {
        $txtSlider=new TextoSlider();
        $txtSlider->texto = $request->texto ;
        $txtSlider->status_id = $request->status_id ;
        $txtSlider->save();
    }
 
    public function show($id)
    {
        $txtSlider=TextoSlider::find($id);
        return $txtSlider;

    }
 
    public function update(Request $request )
    {
        $txtSlider=TextoSlider::findOrFail($request->id);
        $txtSlider->texto     = $request->texto;
        $txtSlider->status_id = $request->status_id ;
        $txtSlider->save();
    }
 
    public function destroy($id)
    {
        $txtSlider=TextoSlider::destroy($id);
        return $txtSlider;
    }
}
