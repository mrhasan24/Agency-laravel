<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Support\Str;



class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name'=>'required',
            'designation'=>'required',
            'image'=>'required',
            'facebook_link'=>'required',
            'twitter_link'=>'required',
            'pinterest_link'=>'required',
            'instagram_link'=>'required',
            'dribbble_link'=>'required',
            'linkedin_link'=>'required',
            'mamber_info'=>'required',
            'mamber_keyword_1'=>'required',
            'mamber_keyword_2'=>'required',
            'mamber_phone'=>'required',
            'mamber_email'=>'required',
            'mamber_website'=>'required',
            'education_qualification'=>'required',
            'technology_skill_1'=>'required',
            'technology_skill_parcent_1'=>'required',
            'technology_skill_2'=>'required',
            'technology_skill_parcent_2'=>'required',
            'technology_skill_3'=>'required',
            'technology_skill_parcent_3'=>'required',
            'technology_skill_4'=>'required',
            'technology_skill_parcent_4'=>'required',
            
            
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/team')) {
                mkdir('uploads/team', 077, true);
            }
            $image->move('uploads/team', $imagename);

        }else{
            $imagename = 'default.png';
        }

       
        $team = new Team();
        $team->name= $request->name;
        $team->designation= $request->designation;
        $team->image= $imagename;
        $team->facebook_link= $request->facebook_link;
        $team->twitter_link= $request->twitter_link;
        $team->pinterest_link= $request->pinterest_link;
        $team->instagram_link= $request->instagram_link;
        $team->dribbble_link= $request->dribbble_link;
        $team->linkedin_link= $request->linkedin_link;
        $team->mamber_info= $request->mamber_info;
        $team->mamber_keyword_1= $request->mamber_keyword_1;
        $team->mamber_keyword_2= $request->mamber_keyword_2;
        $team->mamber_phone= $request->mamber_phone;
        $team->mamber_email= $request->mamber_email;
        $team->mamber_website= $request->mamber_website;
        $team->education_qualification= $request->education_qualification;






        $team->technology_skill_1= $request->technology_skill_1;
        $team->technology_skill_parcent_1= $request->technology_skill_parcent_1;
        $team->technology_skill_2= $request->technology_skill_2;
        $team->technology_skill_parcent_2= $request->technology_skill_parcent_2;
        $team->technology_skill_3= $request->technology_skill_3;
        $team->technology_skill_parcent_3= $request->technology_skill_parcent_3;
        $team->technology_skill_4= $request->technology_skill_4;
        $team->technology_skill_parcent_4= $request->technology_skill_parcent_4;




        
        $team->save();
        return redirect()->route('team.index');


        
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
        $team = Team::find($id);
        return view ('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'name'=>'required',
            'designation'=>'required',
            'image'=>'required',
            'facebook_link'=>'required',
            'twitter_link'=>'required',
            'pinterest_link'=>'required',
            'instagram_link'=>'required',
            'dribbble_link'=>'required',
            'linkedin_link'=>'required',
            'mamber_info'=>'required',
            'mamber_keyword_1'=>'required',
            'mamber_keyword_2'=>'required',
            'mmaber_phone'=>'required',
            'member_email'=>'required',
            'member_website'=>'required',
            'education_qualification'=>'required',
            'technology_skill_1'=>'required',
            'technology_skill_parcent_1'=>'required',
            'technology_skill_2'=>'required',
            'technology_skill_parcent_2'=>'required',
            'technology_skill_3'=>'required',
            'technology_skill_parcent_3'=>'required',
            'technology_skill_4'=>'required',
            'technology_skill_parcent_4'=>'required'

        ]);
        $team = Team::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/team')) {
                mkdir('uploads/team', 077, true);
            }
            $image->move('uploads/team', $imagename);

        }else{
            $imagename =  $team->image;
        }
        
        $team->name= $request->name;
        $team->designation= $request->designation;
        $team->facebook_link= $request->facebook_link;
        $team->twitter_link= $request->twitter_link;
        $team->pinterest_link= $request->pinterest_link;
        $team->instagram_link= $request->instagram_link;
        $team->dribbble_link= $request->dribbble_link;
        $team->image= $imagename;
        $team->linkedin_link= $request->linkedin_link;
        $team->mamber_info= $request->mamber_info;
        $team->mamber_keyword_1= $request->mamber_keyword_1;
        $team->mamber_keyword_2= $request->mamber_keyword_2;
        $team->mmaber_phone= $request->mmaber_phone;
        $team->member_email= $request->member_email;
        $team->member_website= $request->member_website;
        $team->education_qualification= $request->education_qualification;
        $team->technology_skill_1= $request->technology_skill_1;
        $team->technology_skill_parcent_1= $request->technology_skill_parcent_1;
        $team->technology_skill_2= $request->technology_skill_2;
        $team->technology_skill_parcent_2= $request->technology_skill_parcent_2;
        $team->technology_skill_3= $request->technology_skill_3;
        $team->technology_skill_parcent_3= $request->technology_skill_parcent_3;
        $team->technology_skill_4= $request->technology_skill_4;
        $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        if (file_exists('uploads/team/'.$team->image)) {
            unlink('uploads/team/'.$team->image);
            
        }
        $team->delete();
        return redirect()->route('team.index');
    }
}
