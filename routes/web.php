<?php

use App\Http\Controllers\AcademiesController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\TechnicalMeetingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
//
*/

Route::get('/', [LandingController::class,'index']);

Route::get('/blog', function () {
    return view('register.university');
});

Route::get('/school', function () {
    return view('register.school');
});

Route::get('/regschool', function () {
    return view('register.academy.school');
});

Route::get('/reguniversity', function () {
    return view('register.academy.university');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/detaillomba', function () {
    return view('competition-detail');
});


Route::prefix('/event')->group(function(){

     // AcademyRegister
        Route::get('school',function(){
            return view('register.academy.school');
        })->name('academies.scholl');
    
        // UniversityRegister
        Route::get('university',function(){
            return view('register.academy.university');
        })->name('academies.university');
    
    
    Route::get('/{id}',[EventController::class,'index'])->name('event.detail');
    Route::get('/{id}/form',[EventController::class,'form'])->name('event.form');
    Route::resource('academies',AcademiesController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::prefix('dashboard')->group(function(){


    Route::get('/', function () {
        return view('admin.index');
    });


    route::resource('events',EventsController::class);
    route::resource('tm',TechnicalMeetingController::class);

});
