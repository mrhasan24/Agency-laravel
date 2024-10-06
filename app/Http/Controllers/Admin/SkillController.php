<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view ('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
                'skilltitle'=>'required',
                'skillparcent'=>'required'  
        ]);
     
        $skills = new Skill();
        $skills->skilltitle= $request->skilltitle;
        $skills->skillparcent= $request->skillparcent;
        $skills->save();
        return redirect()->route('skill.index');
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
        $skills = Skill::find($id);
        return view ('admin.skill.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'skilltitle'=>'required',
            'skillparcent'=>'required'  
    ]);
 
    $skills = Skill::find($id);
    $skills->skilltitle= $request->skilltitle;
    $skills->skillparcent= $request->skillparcent;
    $skills->save();
    return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skill::find($id);
        $skills->delete();
        return redirect()->route('skill.index');
    }
}
