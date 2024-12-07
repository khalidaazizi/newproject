<?php

namespace App\Http\Controllers\front\slider;
use App\Models\dashboard\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
       
        $sliders= Slider::where('id','>=',1)->get();
        return view('front.slider.index', compact('sliders'));
    }

}
