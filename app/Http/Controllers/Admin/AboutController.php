<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view ('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'projectcomplete'=>'required',
            'experience'=>'required',
            'abouttitle'=>'required',
            'aboutdescription'=>'required',
            'phone'=>'required',
            'abbutton'=>'required'

           
        ]);
     
        $abouts = new About();
        $abouts->projectcomplete= $request->projectcomplete;
        $abouts->experience= $request->experience;
        $abouts->abouttitle= $request->abouttitle;
        $abouts->aboutdescription= $request->aboutdescription;
        $abouts->phone= $request->phone;
        $abouts->abbutton= $request->abbutton;
        $abouts->save();
        return redirect()->route('about.index');
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
        $abouts = About::find($id);
        return view ('admin.about.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

         'projectcomplete'=>'required',
            'experience'=>'required',
            'abouttitle'=>'required',
            'aboutdescription'=>'required',
            'phone'=>'required',
            'abbutton'=>'required'
           
        ]);
        $abouts = About::find($id);
        $abouts->projectcomplete= $request->projectcomplete;
        $abouts->experience= $request->experience;
        $abouts->abouttitle= $request->abouttitle;
        $abouts->aboutdescription= $request->aboutdescription;
        $abouts->phone= $request->phone;
        $abouts->abbutton= $request->abbutton;
        $abouts->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abouts = About::find($id);
       
        $abouts->delete();
        return redirect()->route('about.index');
    }
}
