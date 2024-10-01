<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Successcounter;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class SuccesscounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $successcounters = Successcounter::all();
        return view('admin.successcounter.index', compact('successcounters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.successcounter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title'=>'required',
            'counter'=>'required',
            'image'=>'required'
        ]);
       
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/successcounter')) {
                mkdir('uploads/successcounter', 077, true);
            }
            $image->move('uploads/successcounter', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $successcounters = new Successcounter();
        $successcounters->title= $request->title;
        $successcounters->counter= $request->counter;
        $successcounters->image= $imagename;
        $successcounters->save();
        return redirect()->route('successcounter.index');
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
        $successcounter = Successcounter::find($id);
        return view ('admin.successcounter.edit', compact('successcounter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'title'=>'required',
            'counter'=>'required',
            'image'=>'required'
        ]);
        $successcounter = Successcounter::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/successcounter')) {
                mkdir('uploads/successcounter', 077, true);
            }
            $image->move('uploads/successcounter', $imagename);

        }else{
            $imagename =  $successcounter->image;
        }
        $successcounter->title= $request->title;
        $successcounter->counter= $request->counter;
        $successcounter->image= $imagename;
        $successcounter->save();
        return redirect()->route('successcounter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $successcounter = Successcounter::find($id);
        if (file_exists('uploads/successcounter/'.$successcounter->image)) {
            unlink('uploads/successcounter/'.$successcounter->image);
            
        }
        $successcounter->delete();
        return redirect()->route('successcounter.index');
    }
}
