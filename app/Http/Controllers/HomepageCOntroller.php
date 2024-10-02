<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\About;
use App\Models\Services;
use App\Models\Successcounter;
use App\Models\Team;

use Illuminate\Http\Request;

class HomepageCOntroller extends Controller
{


    public function index()
    {
       
        $sliders = Slider::all();
        $features = Feature::all();
        $abouts = About::all();
        $services = Services::all();
        $successcounters = Successcounter::all();
        $teams = Team::all();
        return view('welcome', compact('sliders', 'features', 'abouts', 'services', 'successcounters', 'teams'));
    }
   
}
