<?php

namespace App\Http\Controllers\Site;



use App\Http\Controllers\Controller;
use App\Models\Slider;

class HomeController extends Controller
{

    public function home()
    {


        $data= [];

        $data['sliders'] = Slider::orderBy('id', 'DESC')->take(3)->select('photo')->get();
        return view('front.home',$data);
    }
}
