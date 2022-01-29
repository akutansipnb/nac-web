<?php

use App\Http\Controllers\AcademiesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContestantController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\TimeScheduleController;
use App\Http\Controllers\Admin\TechnicalMeetingController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventRegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\ValidationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewMentorController;
use App\Http\Controllers\ViewTimeScheduleController;
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

Route::get('detail-berita/{id}', [LandingController::class,'detail']);

Route::get('/blog', function () {
    return view('user.setting.edit');
});

Route::resource('pendamping', ViewMentorController::class);

Route::get('/time', [ViewTimeScheduleController::class, 'indexTimeSchedule']);

// Route::get('/time', function () {
//     return view('user.time');
// });

// Route::get('/pendamping', function () {
//     return view('user.pendamping');
// });

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
    route::resource('register',EventRegisterController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User

route::prefix('user')->group(function(){
    route::resource('dashboard',UserController::class);
    route::get('/validation',[ValidationController::class,'index'])->name('user.validation');
    route::post('/validation',[ValidationController::class,'updateValidation'])->name('user.validate');
});

// Admin
route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    route::get('download/{id}/{validation_no}',[DownloadController::class,'download'])->name('download');

    route::resource('member',AdminController::class);
    route::resource('mentors',MentorController::class);
    route::resource('schedules',TimeScheduleController::class);
    route::resource('events',EventsController::class);
    route::resource('blogs',BlogController::class);
    route::resource('tm',TechnicalMeetingController::class);
    route::resource('school',SchoolController::class);
    route::resource('university',UniversityController::class);

    //userlist
    route::get('/userlist/{id}',[UserListController::class,'index'])->name('userlist.index');


    // Contestant
    route::resource('contestants',ContestantController::class);

   // ACC
    Route::get('/acc/{id}',[ValidationController::class,'validateAcc'])->name('validation.acc');
});
