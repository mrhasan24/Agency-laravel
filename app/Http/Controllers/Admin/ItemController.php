<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'category'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'client_name'=>'required',
            'Project'=>'required',
            'Services'=>'required',
            'image'=>'required'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 077, true);
            }
            $image->move('uploads/item', $imagename);

        }else{
            $imagename = 'default.png';
        }
        $item = new Item();
        $item->category_id = $request->category;
        $item->name= $request->name;
        $item->description= $request->description;
        $item->price= $request->price;
        $item->client_name= $request->client_name;
        $item->Services= $request->Services;
        $item->Project= $request->Project;
        $item->image= $imagename;
        $item->save();
        return redirect()->route('item.index');
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
        $item = Item::find($id);
        $categories = $categories = Category::all();
        return view('admin.item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'category'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'client_name'=>'required',
            'project'=>'required',
            'services'=>'required'
    
         
        ]);

        $item = Item::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 077, true);
            }
            $image->move('uploads/item', $imagename);

        }else{
            $imagename = $item->image;
        }
        
        $item->category_id = $request->category;
        $item->name= $request->name;
        $item->description= $request->description;
        $item->price= $request->price;
        $item->client_name= $request->client_name;
        $item->services= $request->services;
        $item->project= $request->project;
        $item->image= $imagename;
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if (file_exists('uploads/item/'.$item->image)) {
            unlink('uploads/item/'.$item->image);
            
        }
        $item->delete();
        return redirect()->route('item.index');
    }
}
