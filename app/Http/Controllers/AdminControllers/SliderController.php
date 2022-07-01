<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Requests\Slider\DeleteSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    use  ImagesTriat;

    public  function  index()
    {
        $sliders =  Slider::get();
//    dd($sliders);
        return view('Admin.pages.slider.sliders',compact('sliders'));
    }
   public function  create()
   {
       return view('Admin.pages.slider.createSlider');
   }
   public  function  store(CreateSliderRequest $request)
   {

        $fileName = time() . '_slider.jpg';
        $this->UploadImage($request->image,$fileName,'slider');

       //$file->move(public_path('images/slider'),$fileName);
        Slider::create(
            [
                'image' => $fileName,
            ]
        );
        Alert::success('Create Slider' , "Uploaded Successfuly !");
        return redirect()->back();

   }


   public  function  edit($id)
   {
       $slider = Slider::find($id);

       return view('Admin.pages.slider.editSlider',compact('slider'));
   }

   public  function update(UpdateSliderRequest $request)
   {
       $slider =  Slider::find($request->slider_id);
       $fileName = time() .'_slider.jpg';

       $this->UploadImage($request->image,$fileName,'slider',$slider->image_url);

       $slider->update(
           [
               'image' => $fileName,
           ]
       );
       Alert::success('Update Slider' , "Updated Successfuly !");
       return redirect(route('admin.slider.all'));


   }
   public  function  delete(DeleteSliderRequest $request)
   {
       $slider = Slider::find($request->slider_id);
       unlink(public_path($slider->image));
       $slider->delete();
       Alert::error('Delete Slider' ,"Deleted Successfuly !");
       return redirect(route('admin.slider.all'));
   }

}
