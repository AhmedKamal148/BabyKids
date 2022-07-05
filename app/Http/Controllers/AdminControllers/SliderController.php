<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminSliderInterface;
use App\Http\Requests\Slider\CreateSliderRequest;
use App\Http\Requests\Slider\DeleteSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{

    public  $adminSliderRepo;

    public function __construct(AdminSliderInterface $adminSliderRepo)
    {
        $this->adminSliderRepo = $adminSliderRepo;
    }
    public  function  index()
    {
        return $this->adminSliderRepo->index();
    }
   public function  create()
   {
       return $this->adminSliderRepo->create();
   }
   public  function  store(CreateSliderRequest $request)
   {
       return $this->adminSliderRepo->store($request);
   }
   public  function  edit($id)
   {
       return $this->adminSliderRepo->edit($id);
   }
   public  function update(UpdateSliderRequest $request)
   {
       return $this->adminSliderRepo->update($request);
   }
   public  function  delete(DeleteSliderRequest $request)
   {
       return $this->adminSliderRepo->delete($request);
   }
}
