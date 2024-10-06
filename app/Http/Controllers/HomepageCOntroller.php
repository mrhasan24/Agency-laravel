<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\About;
use App\Models\Services;
use App\Models\Category;
use App\Models\Item;
use App\Models\Successcounter;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Skill;

use Illuminate\Http\Request;

class HomepageCOntroller extends Controller
{


    public function index()
    {
       $menus = Menu::all();
        $sliders = Slider::all();
        $features = Feature::all();
        $abouts = About::all();
        $skills = Skill::all();
        $services = Services::all();
        $successcounters = Successcounter::all();
        $teams = Team::all();
        $categories = Category::all();
        $items = Item::all();
        $testimonials = Testimonial::all();
        return view('index', compact('menus', 'sliders', 'features', 'abouts','skills', 'services', 'successcounters', 'teams', 'categories', 'items', 'testimonials'));
    }
   
}
