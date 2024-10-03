<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\About;
use App\Models\Services;
use App\Models\Category;
use App\Models\Item;
use App\Models\Successcounter;
use App\Models\Team;
use App\Models\Testimonial;

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
        $categories = Category::all();
        $items = Item::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('sliders', 'features', 'abouts', 'services', 'successcounters', 'teams', 'categories', 'items', 'testimonials'));
    }
   
}
