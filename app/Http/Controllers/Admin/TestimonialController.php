<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Client_name'=>'required',
            'Client_designation'=>'required',
            'image'=>'required',
            'review_artical'=>'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->Client_name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/testimonial')) {
                mkdir('uploads/testimonial', 077, true);
            }
            $image->move('uploads/testimonial', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $testimonial = new Testimonial();
        $testimonial->Client_name= $request->Client_name;
        $testimonial->Client_designation= $request->Client_designation;
        $testimonial->review_artical= $request->review_artical;
        $testimonial->image= $imagename;
        $testimonial->save();
        return redirect()->route('testimonial.index');
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
