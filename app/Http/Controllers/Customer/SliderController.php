<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function allSlider(){
        $slider = Slider::all();

        return response()->json($slider);
    }
}
