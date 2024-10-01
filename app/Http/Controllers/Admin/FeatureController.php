<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::all();
        return view('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title'=>'required',
            'subtitle'=>'required',
            'image'=>'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/feature')) {
                mkdir('uploads/feature', 077, true);
            }
            $image->move('uploads/feature', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $features = new Feature();
        $features->title= $request->title;
        $features->subtitle= $request->subtitle;
        $features->image= $imagename;
        $features->save();
        return redirect()->route('feature.index');
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
        $features = Feature::find($id);
        return view ('admin.feature.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'title'=>'required',
            'subtitle'=>'required',
           
        ]);
        $features = Feature::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/feature')) {
                mkdir('uploads/feature', 077, true);
            }
            $image->move('uploads/feature', $imagename);

        }else{
            $imagename = $features->image;
        }
       
        $features->title= $request->title;
        $features->subtitle= $request->subtitle;
        $features->image= $imagename;
        $features->save();
        return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $features = Feature::find($id);
        if (file_exists('uploads/feature/'.$features->image)) {
            unlink('uploads/feature/'.$features->image);
            
        }
        $features->delete();
        return redirect()->route('feature.index');
    }
}
