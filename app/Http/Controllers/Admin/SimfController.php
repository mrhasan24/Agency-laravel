<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Simple;
use Carbon\Carbon;


class SimfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $simples = Simple::all();
        return view('admin.simple.index', compact('simples'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.simple.create');
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
            if (!file_exists('uploads/simple')) {
                mkdir('uploads/simple', 077, true);
            }
            $image->move('uploads/simple', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $simples = new Simple();
        $simples->title= $request->title;
        $simples->subtitle= $request->subtitle;
        $simples->image= $imagename;
        $simples->save();
        return redirect()->route('simple.index');
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
