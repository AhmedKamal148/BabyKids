<?php

use App\Http\Controllers\AdminControllers\AdminHomeController;
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
Route::get('/dashboard' ,[AdminHomeController::class,'index'])->name('admin.Home');
/********************************************************************************************/
/*****************************        Faq             ***************************************/
Route::get('/faq',                      [FaqController::class,'index'])->name('admin.faq');
Route::get('/faq/create',               [FaqController::class,'create'])->name('admin.faq.create');
Route::post('/faq/store',               [FaqController::class,'store'])->name('admin.faq.store');
Route::get('/faq/edit/{faqId}',         [FaqController::class,'edit'])->name('admin.faq.edit');
Route::put('/faq/update',               [FaqController::class,'update'])->name('admin.faq.update');
Route::delete('/faq/delete',            [FaqController::class,'delete'])->name('admin.faq.delete');
/********************************************************************************************/
/*****************************        Slider          ***************************************/
Route::get('/slider' ,                  [SliderController::class,'index'])->name('admin.slider');
Route::get('/slider/create' ,           [SliderController::class,'create'])->name('admin.slider.create');
Route::post('/slider/store' ,           [SliderController::class,'store'])->name('admin.slider.store');
Route::get('/slider/edit/{sliderId}' ,  [SliderController::class,'edit'])->name('admin.slider.edit');
Route::get('/slider/update' ,           [SliderController::class,'update'])->name('admin.slider.update');
Route::get('/slider/delete' ,           [SliderController::class,'delete'])->name('admin.slider.delete');
/********************************************************************************************/




