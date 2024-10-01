<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\About;
use App\Models\Services;

use Illuminate\Http\Request;

class HomepageCOntroller extends Controller
{


    public function index()
    {
       
        $sliders = Slider::all();
        $features = Feature::all();
        $abouts = About::all();
        $services = Services::all();
        return view('welcome', compact('sliders', 'features', 'abouts', 'services'));
    }
   
}
