<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;    
use Carbon\Carbon;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'services_name'=>'required',
            'servicesitem1'=>'required',
            'servicesitem2'=>'required',
            'servicesitem3'=>'required',
            'servicesitem4'=>'required',
            'servicesitem5'=>'required',

            'image'=>'required' 
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->services_name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 077, true);
            }
            $image->move('uploads/service', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $services = new Services();
        $services->services_name= $request->services_name;
        $services->servicesitem1= $request->servicesitem1;
        $services->servicesitem2= $request->servicesitem2;
        $services->servicesitem3= $request->servicesitem3;
        $services->servicesitem4= $request->servicesitem4;
        $services->servicesitem5= $request->servicesitem5;
        $services->image= $imagename;
        $services->save();
        return redirect()->route('services.index');
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
        $services = Services::find($id);
        return view ('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'services_name'=>'required',
            'servicesitem1'=>'required',
            'servicesitem2'=>'required',
            'servicesitem3'=>'required',
            'servicesitem4'=>'required',
            'servicesitem5'=>'required'
        ]);
        $services = Services::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 077, true);
            }
            $image->move('uploads/service', $imagename);

        }else{
            $imagename =  $services->image;
        }
   
        $services->services_name= $request->services_name;
        $services->servicesitem1= $request->servicesitem1;
        $services->servicesitem2= $request->servicesitem2;
        $services->servicesitem3= $request->servicesitem3;
        $services->servicesitem4= $request->servicesitem4;
        $services->servicesitem5= $request->servicesitem5;

        $services->image= $imagename;
        $services->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = Services::find($id);
        if (file_exists('uploads/service/'.$services->image)) {
            unlink('uploads/service/'.$services->image);
            
        }
        $services->delete();
        return redirect()->route('services.index');
    }
}
