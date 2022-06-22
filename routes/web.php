<?php

use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\FaqController;
use App\Http\Controllers\AdminControllers\SliderController;
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

Route::get('/', function () {
    return view('User.pages.home');
})->name('User.Home');

/********************************************************************************************/
Route::get('/admin' ,[AdminHomeController::class,'index'])->name('admin.Home');
/********************************************************************************************/
/*****************************        Faq             ***************************************/
Route::group(['prefix'=> 'admin', 'as' => 'admin.'], function ()
{
    Route::group(['prefix'=>'faq' , 'as' =>'faq.'],function ()
    {
        Route::get('',                     [FaqController::class,'index'])->name('all');
        Route::get('create',               [FaqController::class,'create'])->name('create');
        Route::post('store',               [FaqController::class,'store'])->name('store');
        Route::get('edit/{faqId}',         [FaqController::class,'edit'])->name('edit');
        Route::put('update',               [FaqController::class,'update'])->name('update');
        Route::delete('delete',            [FaqController::class,'delete'])->name('delete');
    });

});

/********************************************************************************************/
/*****************************        Slider          ***************************************/
Route::group(['prefix'=> 'admin' ,'as' => 'admin.'],function()
{
    Route::group(['prefix'=> 'slider','as' => 'slider.'],function()
    {
        Route::get('',                     [SliderController::class,'index'])->name('all');
        Route::get('create',               [SliderController::class,'create'])->name('create');
        Route::post('store',               [SliderController::class,'store'])->name('store');
        Route::get('edit/{sliderId}',      [SliderController::class,'edit'])->name('edit');
        Route::get('update',               [SliderController::class,'update'])->name('update');
        Route::get('delete',               [SliderController::class,'delete'])->name('delete');
    });
});
/********************************************************************************************/
/*****************************        login          ***************************************/
Route::group(['prefix'=>'admin' , 'as' =>'admin.' ],function()
{
    Route::get('login',[AuthController::class ,'index'])->name('loginPage');
    Route::post('login',[AuthController::class ,'login'])->name('login');

});
/********************************************************************************************/

