<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SuccesscounterController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SimfController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Page\TeammamberDtController;
use App\Http\Controllers\Pages\AboutusColtroller;
use App\Http\Controllers\Pages\ServicessController;
use App\Http\Controllers\Pages\PortfoliopController;








use App\Http\Controllers\HomepageCOntroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomepageCOntroller::class, 'index']);
//Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::resource('home', App\Http\Controllers\Admin\MenuController::class);
    Route::resource('slider', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('feature', App\Http\Controllers\Admin\FeatureController::class);
    Route::resource('about', App\Http\Controllers\Admin\AboutController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServicesController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('item', ItemController::class);
    Route::resource('successcounter', App\Http\Controllers\Admin\SuccesscounterController::class);
    Route::resource('team', App\Http\Controllers\Admin\TeamController::class);
    Route::resource('testimonial', App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('skill', App\Http\Controllers\Admin\SkillController::class);
});

Route::group(['prefix' => '/'],function(){
    Route::get('team-details' , [App\Http\Controllers\Page\TeammamberDtController::class, 'index'])->name('pages.team');
    
    
});
Route::group(['prefix' => '/'],function(){
    Route::get('about-us' , [App\Http\Controllers\Pages\AboutusColtroller::class, 'index'])->name('pages.about-us');
    Route::resource('services', App\Http\Controllers\Pages\ServicessController::class);
    Route::get('portfolio' , [App\Http\Controllers\Pages\PortfoliopController::class, 'index'])->name('pages.portfolio');

    
    
    
});