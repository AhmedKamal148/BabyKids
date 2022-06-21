<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    use  ImagesTriat;
   public function  create()
   {
       return view('Admin.pages.slider.createSlider');
   }

   public  function  store(Request $request)
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

}
