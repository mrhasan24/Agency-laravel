<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
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
            'technology_skill_parcent_4'=>'required'
            
      ];
}
