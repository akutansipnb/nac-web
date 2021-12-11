<?php

use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

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


Route::get('/dashboard', function () {
    return view('admin.index');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::prefix('dashboard')->group(function(){

    
    Route::get('/', function () {
        return view('admin.index');
    });


    route::resource('events',EventsController::class);

});
