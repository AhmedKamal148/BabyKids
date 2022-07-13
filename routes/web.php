<?php

use App\Http\Controllers\AdminControllers\ActivityController;
use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\CourseController;
use App\Http\Controllers\AdminControllers\EventController;
use App\Http\Controllers\AdminControllers\FaqController;
use App\Http\Controllers\AdminControllers\LocationController;
use App\Http\Controllers\AdminControllers\SliderController;
use App\Http\Controllers\AdminControllers\TeacherController;
use App\Http\Controllers\UserControllers\HomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/********************************************************************************************/
/*****************************        User            ***************************************/
Route::get('/',[ HomeController::class,'index'])->name('User.home');
/********************************************************************************************/



/********************************************************************************************/
/**************************           Admin Routs                  **************************/
/********************************************************************************************/
/****************           login & login_Page => Without Middleware      ******************/
Route::group(['prefix'=>'admin' , 'as' =>'admin.' ],function()
{
    Route::get('login',[AuthController::class ,'index'])->name('loginPage');
    Route::post('login',[AuthController::class ,'login'])->name('login');
});
/********************************************************************************************/
/****************           ADMIN GROUP  WITH  MIDDLEWARE                  ******************/
/********************************************************************************************/
/*****************************    Admin_Home && Logout       ********************************/
Route::group(['prefix'=>'admin' , 'as' =>'admin.','middleware'=>'auth' ],function()
{
    Route::get('' ,[AdminHomeController::class,'index'])->name('Home');
    Route::get('logout',[AuthController::class ,'logout'])->name('logout');
    /********************************************************************************************/
    /*****************************        Faq             ***************************************/

    Route::group(['prefix'=>'faq' , 'as' =>'faq.' ],function ()
    {
        Route::get('',                     [FaqController::class,'index'])->name('all');
        Route::get('create',               [FaqController::class,'create'])->name('create');
        Route::post('store',               [FaqController::class,'store'])->name('store');
        Route::get('edit/{faqId}',         [FaqController::class,'edit'])->name('edit');
        Route::put('update',               [FaqController::class,'update'])->name('update');
        Route::delete('delete',            [FaqController::class,'delete'])->name('delete');
    });
    /********************************************************************************************/
    /*****************************        Slider          ***************************************/

    Route::group(['prefix'=> 'slider','as' => 'slider.','middleware'=>'auth'],function()
    {
        Route::get('',                     [SliderController::class,'index'])-> name('all');
        Route::get('create',               [SliderController::class,'create'])->name('create');
        Route::post('store',               [SliderController::class,'store'])-> name('store');
        Route::get('edit/{sliderId}',      [SliderController::class,'edit'])->  name('edit');
        Route::put('update',               [SliderController::class,'update'])->name('update');
        Route::delete('delete',            [SliderController::class,'delete'])->name('delete');
    });

    /********************************************************************************************/
    /*****************************        Teacher          **************************************/
    Route::group(['prefix'=>'teacher', 'as' => 'teacher.'],function()
    {
        Route::get('',                     [TeacherController::class,'index'])->name('all');
        Route::get('create',               [TeacherController::class,'create'])->name('create');
        Route::post('store',               [TeacherController::class,'store'])->name('store');
        Route::get('edit/{teacher_id}',    [TeacherController::class,'edit'])->name('edit');
        Route::put('update',               [TeacherController::class,'update'])->name('update');
        Route::delete('delete',            [TeacherController::class,'delete'])->name('delete');
    });
    /********************************************************************************************/
    /*****************************        course          **************************************/
    Route::group(['prefix'=>'course', 'as' => 'course.'],function()
    {
        Route::get('',                    [CourseController::class,'index'])->name('all');
        Route::get('create',              [CourseController::class,'create'])->name('create');
        Route::post('store',              [CourseController::class,'store'])->name('store');
        Route::get('edit/{course_id}',    [CourseController::class,'edit'])->name('edit');
        Route::put('update',              [CourseController::class,'update'])->name('update');
        Route::delete('delete',           [CourseController::class,'delete'])->name('delete');
    });
    /********************************************************************************************/
    /*****************************        Activties            **********************************/
    Route::group(['prefix'=>'activity', 'as' => 'activity.'],function()
    {
        Route::get('',                    [ActivityController::class,'index'])->name('all');
        Route::get('create',              [ActivityController::class,'create'])->name('create');
        Route::post('store',              [ActivityController::class,'store'])->name('store');
        Route::get('edit/{activity_id}',  [ActivityController::class,'edit'])->name('edit');
        Route::put('update',              [ActivityController::class,'update'])->name('update');
        Route::delete('delete',           [ActivityController::class,'delete'])->name('delete');
    });
    /********************************************************************************************/
    /********************************************************************************************/
    /*****************************        Event                 *********************************/
    Route::group(['prefix' => 'event' , 'as' => 'event.'],function()
    {
        Route::get('',                     [EventController::class,'index'])->name('all');
        Route::get('create',               [EventController::class,'create'])->name('create');
        Route::post('store',               [EventController::class,'store'])->name('store');
        Route::get('edit/{event_id}',      [EventController::class,'edit'])->name('edit');
        Route::put('update',               [EventController::class,'update'])->name('update');
        Route::delete('delete',            [EventController::class,'delete'])->name('delete');
    });
    /********************************************************************************************/
    /********************************************************************************************/
    /*****************************        Location              *********************************/
        Route::group(['prefix' => 'location' , 'as' => 'location.'],function()
        {
            Route::get('',                      [LocationController::class,'index'])->name('all');
            Route::get('create',                [LocationController::class,'create'])->name('create');
            Route::post('store',                 [LocationController::class,'store'])->name('store');
            Route::get('edit/{location_id}',    [LocationController::class,'edit'])->name('edit');
            Route::put('update',                [LocationController::class,'update'])->name('update');
            Route::delete('delete',                [LocationController::class,'delete'])->name('delete');
        });
    /********************************************************************************************/
});



