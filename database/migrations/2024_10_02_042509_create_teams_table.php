<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('image')->default('default.png');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('pinterest_link');
            $table->string('instagram_link');
            $table->string('dribbble_link');
            $table->string('linkedin_link');
            $table->text('mamber_info');
            $table->string('mamber_keyword_1');
            $table->string('mamber_keyword_2');
            $table->integer('mamber_phone');
            $table->string('mamber_email');
            $table->string('mamber_website');
            $table->text('education_qualification');
            $table->string('technology_skill_1');
            $table->integer('technology_skill_parcent_1');
            $table->string('technology_skill_2');
            $table->integer('technology_skill_parcent_2');
            $table->string('technology_skill_3');
            $table->integer('technology_skill_parcent_3');
            $table->string('technology_skill_4');
            $table->integer('technology_skill_parcent_4');
           
            $table->timestamps();
        });
    }






    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
