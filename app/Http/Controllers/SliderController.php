<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
   
    public function index()
    {
        $sliders=Slider::with('status')->with('prioridad')->get();
               
        return $sliders;
    }
 
    public function store(Request $request)
    {
        $slider= new Slider();
        $slider->nombre_slider = $request->nombre_slider ;
        $slider->img_pc        = $request->img_pc ;
        $slider->img_movil     = $request->img_movil ;
        $slider->ceo           = $request->ceo ;
        $slider->vigencia      = $request->vigencia ;
        $slider->prioridad     = $request->prioridad ;
        $slider->link          = $request->link ;
        $slider->status_id     = $request->status_id ;
        $slider->prioridad_id  = $request->prioridad_id;
        $slider->save();
    }
 
    public function show($id)
    {
        $slider=Slider::with('status')->with('prioridad')->find($id);
        return $slider;
    }
  
    public function update(Request $request )
    {
        $slider=Slider::findOrFail($request-$id);
        $slider->nombre_slider = $request->nombre_slider ;
        $slider->img_pc        = $request->img_pc ;
        $slider->img_movil     = $request->img_movil ;
        $slider->ceo           = $request->ceo ;
        $slider->vigencia      = $request->vigencia ;
        $slider->prioridad     = $request->prioridad ;
        $slider->link          = $request->link ;
        $slider->status_id     = $request->status_id ;
        $slider->prioridad_id  = $request->prioridad_id;
        $slider->save();
    }
 
    public function destroy($id)
    {
        $slider=Slider::destroy($id);
        return $slider;
    }
}
