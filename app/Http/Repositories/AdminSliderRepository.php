<?php
namespace  App\Http\Repositories;

use App\Http\Interfaces\AdminSliderInterface;
use App\Http\Traits\ImagesTriat;
use App\Models\Slider;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderRepository implements AdminSliderInterface
{

    use  ImagesTriat;

    public function index()
    {
        $sliders =  Slider::get();
        return view('Admin.pages.slider.sliders',compact('sliders'));
    }

    public function create()
    {
        return view('Admin.pages.slider.createSlider');

    }

    public function store($request)
    {
        $fileName = time() . '_slider.jpg';
        $this->UploadImage($request->image,$fileName,'slider');
        Slider::create(
            [
                'image' => $fileName,
            ]
        );
        Alert::success('Create Slider' , "Uploaded Successfuly !");
        return redirect()->back();
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('Admin.pages.slider.editSlider',compact('slider'));
    }

    public function update($request)
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

    public function delete($request)
    {
        $slider = Slider::find($request->slider_id);
        unlink(public_path($slider->image));
        $slider->delete();
        Alert::error('Delete Slider' ,"Deleted Successfuly !");
        return redirect(route('admin.slider.all'));
    }
}
