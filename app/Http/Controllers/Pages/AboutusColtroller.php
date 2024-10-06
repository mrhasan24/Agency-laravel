<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Feature;
use App\Models\Team;
use App\Models\Successcounter;
use App\Models\Testimonial;

class AboutusColtroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $abouts = About::all();
        $features = Feature::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $successcounters = Successcounter::all();
        // $aboutus = Aboutus::all();
        // $header = Header::all();
        // $ctss = Cts::all();
        // $teams = team::all();
        return view('pages.about', compact('abouts', 'features', 'teams', 'testimonials', 'successcounters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
