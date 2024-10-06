<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Carbon\Carbon;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.home.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'email'=>'required',
            'location'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'pinterest'=>'required',
            'dribble'=>'required',
            'linkedin'=>'required',
            'phone'=>'required',
            'image'=>'required' 
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->location);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/home')) {
                mkdir('uploads/home', 077, true);
            }
            $image->move('uploads/home', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $menus = new Menu();
        $menus->email= $request->email;
        $menus->location= $request->location;
        $menus->facebook= $request->facebook;
        $menus->twitter= $request->twitter;
        $menus->instagram= $request->instagram;
        $menus->pinterest= $request->pinterest;
        $menus->dribble= $request->dribble;
        $menus->linkedin= $request->linkedin;
        $menus->phone= $request->phone;
        $menus->image= $imagename;
        $menus->save();
        return redirect()->route('home.index');
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
        $menus = Menu::find($id);
        return view ('admin.home.edit', compact('menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'email'=>'required',
            'location'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'pinterest'=>'required',
            'dribble'=>'required',
            'linkedin'=>'required',
            'phone'=>'required',
            'image'=>'required' 
        ]);
        $menus = Menu::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->location);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/home')) {
                mkdir('uploads/home', 077, true);
            }
            $image->move('uploads/home', $imagename);

        }else{
            $imagename =$menus->image;
        }
      
        $menus->email= $request->email;
        $menus->location= $request->location;
        $menus->facebook= $request->facebook;
        $menus->twitter= $request->twitter;
        $menus->instagram= $request->instagram;
        $menus->pinterest= $request->pinterest;
        $menus->dribble= $request->dribble;
        $menus->linkedin= $request->linkedin;
        $menus->phone= $request->phone;
        $menus->image= $imagename;
        $menus->save();
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menus = Menu::find($id);
        if (file_exists('uploads/home/'.$menus->image)) {
            unlink('uploads/home/'.$menus->image);
            
        }
        $menus->delete();
        return redirect()->route('home.index');
    }
}
